
 
 
require('./bootstrap');
window.Vue = require('vue');


import router from './router';




import AppComponent from './components/AppComponent.vue';




const app = new Vue({
    el: '#app',
    components: {
        AppComponent
    },
    router,
   

    
});


