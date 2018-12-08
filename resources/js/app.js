
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');
 import Vuex from 'Vuex';
 Vue.use(Vuex);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

 const store = new Vuex.Store({
 	state:{
 		item:{}
 	},
 	mutations:{
 		setItem(state,obj){
 			state.item = obj;
 		}
 	}
 });

 Vue.component('leftsidebar', require('./components/LeftSideBar.vue'));
 Vue.component('header-component', require('./components/Header.vue'));
 Vue.component('feed', require('./components/Feed.vue'));
 Vue.component('post', require('./components/Post.vue'));
 Vue.component('form-post', require('./components/FormPost.vue'));
 Vue.component('modal', require('./components/Modal.vue'));
 Vue.component('topheaderprofile', require('./components/TopHeaderProfile.vue'));









// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const app = new Vue({
 	el: '#app',
 	store,
 	mounted:function(){

 		setTimeout(function () {
 			jQuery("#ms-preload").hide();
 		}, 1000);
 	}
 });
