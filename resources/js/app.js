
 
 
require('./bootstrap');
window.Vue = require('vue');


import router from './router';




import AdminComponent from './components/admin/AdminComponent.vue';
import AppComponent from './components/AppComponent.vue';


const app = new Vue({
    el: '#app',
    components: {
        AdminComponent,
        AppComponent
    },
    router,
   

    
});


