import Vue from 'vue'
import VueRouter from 'vue-router'



Vue.use(VueRouter)


export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/admin/post',
            name: 'admin.post',
            component: () => import('./components/admin/post/PostComponent.vue'),
            props: true,

        },
        {
            path: '/admin/post/create',
            name: 'admin.post.create',
            component: () => import('./components/admin/post/PostCreateComponent.vue'),

        },
        {
            path: '/admin/post/:id/edit',
            name: 'admin.post.edit',
            component: () => import('./components/admin/post/PostEditComponent.vue'),

        },
    ]
    
})