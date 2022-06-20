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
        {
            path: '/admin/category',
            name: 'admin.category',
            component: () => import('./components/admin/category/CategoryComponent.vue'),
            props: true,

        },
        {
            path: '/admin/category/create',
            name: 'admin.category.create',
            component: () => import('./components/admin/category/CategoryCreateComponent.vue'),

        },
        {
            path: '/admin/category/:id/edit',
            name: 'admin.category.edit',
            component: () => import('./components/admin/category/CategoryEditComponent.vue'),

       },
       {
        path: '/admin/user',
        name: 'admin.user',
        component: () => import('./components/admin/user/UserComponent.vue'),
        props: true,

        },
        {
        path: '/admin/user/:id/edit',
        name: 'admin.user.edit',
        component: () => import('./components/admin/user/UserEditComponent.vue'),

        },
        {
            path: '/',
            name: 'home',
            component: () => import('./components/layouts/HomeComponent.vue'),
    
        },
    ]
    
})