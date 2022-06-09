import Vue from 'vue'


import VueRouter from 'vue-router'
import OneComponent from './components/OneComponent.vue'
import TwoComponent from './components/TwoComponent.vue'

Vue.use(VueRouter)


export default new VueRouter({
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
    
})