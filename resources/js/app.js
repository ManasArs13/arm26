
 
 
require('./bootstrap');
window.Vue = require('vue');


import router from './router';




import AdminComponent from './components/admin/AdminComponent.vue';




const app = new Vue({
    el: '#app',
    components: {
        AdminComponent,
              
    },
    router,
   

    
});


