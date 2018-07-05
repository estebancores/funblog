<template>
    <div>
        <div class="post__master_container" v-for="post in postsList">
            <div class="post_image_container">
                <img :src="post.file" alt="">
            </div>
            <div class="post_name_container">
                <p>{{post.name}}</p>
            </div>
            <div class="post_options_container"></div>
        </div>
        <div class="col-lg-12">
            <ul class="pagination pagination-lg float-left">
                <li v-if="pagination.current_p > 1" class="page-item">
                    <a href="#" class="page-link"
                       @click.prevent="cambiarPagina( pagination.current_p - 1 )">Atras </a>
                </li>
            </ul>
            <ul class="pagination pagination-lg float-right">

                <li v-if="pagination.current_p < pagination.last_p" class="page-item">
                    <a href="#" class="page-link"
                       @click.prevent="cambiarPagina( pagination.current_p + 1 )">Siguiente</a>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            let vm = this;
            vm.getPublishedPosts(1);
        },
        data() {
            return {
                postsList: [],
                pagination: {
                    total: 0,
                    current_p: 0,
                    per_p: 50,
                    last_p: 0,
                    from: "",
                    to: ""
                },
            }
        },
        methods: {
            getPublishedPosts(page) {
                let vm = this;
                let urlPosts = 'api/posts-list?page=' +  page;
                axios.get(
                    urlPosts
                ).then(response => {

                    vm.postsList = response.data.data;

                    vm.pagination.total = response.data.total;
                    vm.pagination.current_p = response.data.current_page;
                    vm.pagination.per_p = response.data.per_page;
                    vm.pagination.last_p = response.data.last_page;
                    vm.pagination.from = response.data.from;
                    vm.pagination.to = response.data.to;

                }).catch(error => {
                    alert('Error');
                });
            },
            cambiarPagina: function (page) {
                this.pagination.current_p = page;
                this.getPublishedPosts(page);
            },
        },
        computed: {
            paginaActiva: function () {
                return this.pagination.current_p;
            },
            numerosPaginas: function () {
                if (!this.pagination.to) {
                    return [];
                }
                var from = this.pagination.current_p - 8;
                if (from < 1) {
                    from = 1;
                }
                var to = from + (8 * 2);
                if (to >= this.pagination.last_p) {
                    to = this.pagination.last_p;
                }
                var pageArray = [];
                while (from <= to) {
                    pageArray.push(from);
                    from++;
                }
                return pageArray;
            }
        }

    }
</script>
<style>
    .post__master_container {
        margin: 10px 0;
        background: #fff;
        border: 1px solid #eee;
    }

    .post_image_container {
        text-align: center;
        min-height: 455px;
        background: #ccc;
    }

    .post_image_container img {
        width: 100%;
    }

    .post_name_container {
        text-align: center;
        min-height: 62px;
        padding: 20px 0;
    }

    .post_name_container p {
        margin: 0;
    }
</style>