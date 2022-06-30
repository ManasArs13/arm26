
 
 
require('./bootstrap');
window.Vue = require('vue');


import router from './router';




import AdminComponent from './components/AdminComponent.vue';
import SearchComponent from './components/SearchComponent.vue';



const app = new Vue({
    el: '#app',
    components: {
        AdminComponent,
        SearchComponent
    },
    router,
   

    
});




