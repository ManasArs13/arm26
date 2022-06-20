<template>
    <div>
        <header-component></header-component>
           
        <router-view></router-view>

    </div>
</template>

<script>
    
    import HeaderComponent from './layouts/HeaderComponent.vue'


    

    export default {
        name: "AppComponent",
        components: {
            'header-component': HeaderComponent
        },

    }
</script>
