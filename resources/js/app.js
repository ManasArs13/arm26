
 
 
require('./bootstrap');
import Vue from 'vue'
window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)


//import router from './router';
import AppComponent from './components/AppComponent.vue';
import OneComponent from './components/OneComponent.vue'
import TwoComponent from './components/TwoComponent.vue'
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('OneComponent', require('./components/OneComponent.vue').default);
Vue.component('TwoComponent', require('./components/TwoComponent.vue').default);
Vue.component('AppComponent', require('./components/AppComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
var router = new VueRouter({
    mode: 'history',

    routes: [
        
        {
            path: '/one',
            name: 'one',
            component: OneComponent

        },
        {
            path: '/two',
            name: 'two',
            component: TwoComponent

        },
    ]
    
});
const app = new Vue({
    el: '#app',
    components: {
        AppComponent
    },
    router,
   

    
});


