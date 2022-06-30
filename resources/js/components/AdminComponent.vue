<template>
     <div>
          <header-component></header-component>
          <div class="container-fluid">
               <div class="row">
                    <navi-component></navi-component>
                    <router-view @changeSuccesCategory='returnsuccesCategory' @changeSuccesPost='returnsuccesPost'
                         :succesPost="succesPost" :succesCategory="succesCategory"></router-view>
               </div>
          </div>
     </div>
</template>

<script>

import HeaderComponent from './HeaderComponent.vue'
import NaviComponent from './NaviComponent.vue'

export default {


     name: "AdminComponent",
     data() {
          return {
               succesPost: null,
               succesCategory: null,
          }
     },

     methods: {
          returnsuccesPost(data) {
               this.succesPost = data
          },
          returnsuccesCategory(data) {
               this.succesCategory = data
          }
     },

     components: {
          'header-component': HeaderComponent,
          'navi-component': NaviComponent
     }
}
</script>