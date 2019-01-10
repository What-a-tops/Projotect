require('./bootstrap');
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue);

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

// This imports <b-card> along with all the <b-card-*> sub-components as a plugin:
import bCard from 'bootstrap-vue/es/components/card/card';
Vue.component('b-card', bCard);

// This imports directive v-b-scrollspy as a plugin:
import { Scrollspy } from 'bootstrap-vue/es/directives';
Vue.use(Scrollspy);

window.Vue       = require('vue');
window.VueRouter = require('vue-router').default;
window.VueAxios  = require('vue-axios').default;
window.Axios     = require('axios').default;
let AppLayout    = require('./components/App.vue');

// login page
// const Login_page    = Vue.component('Login_page', require('./components/Login_page.vue'));

// //register
// const Register_page = Vue.component('Register_page', require('./components/Register_page.vue'));

// show the list post template
const Listposts     = Vue.component('Listposts', require('./components/Listposts.vue'));

// add post template
const Addpost       = Vue.component('Addpost', require('./components/Addpost.vue'));

// edit post template
const Editpost      = Vue.component('Editpost', require('./components/Editpost.vue'));

// delete post template
const Deletepost    = Vue.component('Deletepost', require('./components/Deletepost.vue'));

// view single post template
const Viewpost      = Vue.component('Viewpost', require('./components/Viewpost.vue'));

//regitering Modules
Vue.use(VueRouter, VueAxios, axios);

const routes = [
  // {
  //   name      : 'Login_page',
  //   path      : '/',
  //   component : Login_page
  // },
  // {
  //   name      : 'Register_page',
  //   path      : '/register_page',
  //   component : Register_page
  // },
  {
    name      : 'Listposts',
    path      : '/',
    component : Listposts
  },
  {
    name      : 'Addpost',
    path      : '/add-post',
    component : Addpost
  },
  {
    name      : 'Editpost',
    path      : '/edit/:id',
    component : Editpost
  },
  {
    name      : 'Deletepost',
    path      : '/post-delete',
    component : Deletepost
  },
  {
    name      : 'Viewpost',
    path      : '/view/:id',
    component : Viewpost
  }
];


const router = new VueRouter({mode: 'history', routes: routes});
if ($('#app').length > 0) {
  new Vue(
    Vue.util.extend(
      { router },
      AppLayout
    )
  ).$mount('#app');
}
