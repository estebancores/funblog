import Vue from 'vue';
import VueRouter from 'vue-router'

Vue.use(VueRouter);
//Se importan los componentes
import Home from '../components/Home'
import CreatePost from '../components/CreatePost'

const routes = [
    {path:'/', component:Home},
    {path:'/createpost', component:CreatePost},

];

export default new VueRouter({
    routes
});


