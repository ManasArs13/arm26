<template>
    <div>
        <header-component></header-component>
           
        <banner-component></banner-component>
        <content-component></content-component>


        <footer-component></footer-component>

    </div>
</template>

<script>
    

    import HeaderComponent from './layouts/HeaderComponent.vue'
    import FooterComponentVue from './layouts/FooterComponent.vue'
    import BannerComponent from './layouts/BannerComponent.vue'
    import ContentComponent from './layouts/ContentComponent.vue'


    

    export default {
        name: "AppComponent",
        components: {
            'header-component': HeaderComponent,
            'footer-component': FooterComponentVue,
            'banner-component': BannerComponent,
            'content-component': ContentComponent,
        },

    }
</script>
