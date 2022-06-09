import Vue from 'vue'
import VueRouter from 'vue-router'




import TwoComponent from './components/TwoComponent.vue';

Vue.use(VueRouter)


export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/one',
            name: 'one',
            component: () => import('./components/OneComponent.vue'),

        },
        {
            path: '/two',
            name: 'two',
            component: TwoComponent

        },
    ]
    
})