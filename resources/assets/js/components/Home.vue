<template>
    <div class="container">
        <div class="col-lg-12 text-center" id="img__header">
            <img :src="headImg">
        </div>
        <div class="row">
            <div class="col-lg-8 post__list_container">
               <post-list></post-list>

            </div>
            <div class="col-lg-4">
                <div>
                    <ul class="menu">
                        <li class="menu__option">
                            <div class="menu__option_icon">
                                <div class="icon" style=""></div>
                            </div>
                            <div class="menu__option_name">
                                <router-link to="/createpost"> Vamo a Weboniar </router-link>
                            </div>
                        </li>
                        <li class="menu__option">
                            <div class="menu__option_icon">
                                <div class="icon"></div>
                            </div>
                            <div class="menu__option_name">¿Como Publicar?</div>
                        </li>
                        <li class="menu__option">
                            <div class="menu__option_icon">
                                <div class="icon"></div>
                            </div>
                            <div class="menu__option_name">La Webada que Nadie Lee</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import PostList from './PostsList'

    export default {
        components: {
            'post-list': PostList
        },
        mounted() {
        },
        data() {
            return {
                headImg: "img/Weboonaditas.png",
            }
        },
        computed: {

        }

    }
</script>
<style>
    #img__header {
        margin: 25px 0;
    }

    .menu {
        background: #fff;
        border: 1px solid #eee;
        list-style: none;
        padding: 0;
        margin: 10px 0;
        min-height: 155px;
    }

    .menu__option {
        padding: 10px 5px;
        margin: 10px 0;
        clear: both;
    }

    .menu__option_name,
    .menu__option_icon {
        float: left;
    }

    .menu__option_icon {
        text-align: center;
        width: 20%;
    }

    .menu__option_name {
        width: 60%;
    }

    .icon {
        width: 100%;
        height: 30px;
    }
</style>