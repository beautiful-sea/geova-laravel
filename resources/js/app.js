
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example', require('./components/ExampleComponent.vue'));
Vue.component('leftsidebar', require('./components/LeftSideBarComponent.vue'));
Vue.component('header-component', require('./components/HeaderComponent.vue'));
Vue.component('feed', require('./components/FeedComponent.vue'));
Vue.component('post', require('./components/PostComponent.vue'));
Vue.component('form-post', require('./components/FormPostComponent.vue'));
Vue.component('modal', require('./components/ModalComponent.vue'));







// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
