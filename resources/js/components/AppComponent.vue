<template>
    <div>
        <header-component></header-component>
           
        <router-view></router-view>


        <footer-component></footer-component>

    </div>
</template>

<script>
    

    import HeaderComponent from './layouts/HeaderComponent.vue'
    import FooterComponentVue from './layouts/FooterComponent.vue'



    

    export default {
        name: "AppComponent",
        components: {
            'header-component': HeaderComponent,
            'footer-component': FooterComponentVue,
        },

    }
</script>
