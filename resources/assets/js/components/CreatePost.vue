<template>
    <div class="container form__create_form">
        <div class="col-lg-4 offset-4">
            <div class="form-group">
                <label for="" class="form-control-label">Nombre *</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Descripcion (opcional)</label>
                <textarea  class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Imagen</label>
                <input type="file">
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
        }
    }
</script>
<style>
    .form__create_form{
        background: #fff;
        border: 1px solid #eee;
    }
</style>