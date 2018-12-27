
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
 		posts:{},
 		comments:{},
 		onEditPost:{},
 		onCommentPost:{
 			user:{},
 			likes:{},
 			comments:{}
 		}
 	},
 	getters:{
 		all_my_posts:state => () => state.posts,
 		getOnEditPost(state){
 			return state.onEdit
 		},
 		getOnCommentPost:state => () => state.onCommentPost
 	},
 	mutations:{
 		setPosts(state,obj){
 			state.posts = obj
 		},
  		setComments(state,obj){
 			state.comments = obj
 		},
 		setOnEditPost(state,obj){
 			state.onEditPost = obj
 		},
 		setOnCommentPost(state,obj){
 			state.onCommentPost = obj
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
 Vue.component('blockleftfeed', require('./components/BlockLeftFeed.vue'));
 Vue.component('blockmainfeed', require('./components/BlockMainFeed.vue'));
 Vue.component('blockrightfeed', require('./components/BlockRightFeed.vue'));
 Vue.component('uploadimage', require('./components/uploadImage.vue'));
 Vue.component('commentspost', require('./components/CommentsPost.vue'));
 Vue.component('editpost', require('./components/EditPost.vue'));













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