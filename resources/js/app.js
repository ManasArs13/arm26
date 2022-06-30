
 
 
require('./bootstrap');
window.Vue = require('vue');


import router from './router';




import AdminComponent from './components/AdminComponent.vue';




const app = new Vue({
    el: '#app',
    components: {
        AdminComponent,
              
    },
    router,
   

    
});



