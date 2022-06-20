<template>
    <div>
        <banner-component></banner-component>
        <content-component></content-component>
    </div>
</template>

<script>
   
   import BannerComponent from './BannerComponent.vue'
   import ContentComponent from './ContentComponent.vue'

   export default {

        name: 'HomeComponent',



        components: {
            'banner-component': BannerComponent,
            'content-component': ContentComponent
        },

    }

</script>