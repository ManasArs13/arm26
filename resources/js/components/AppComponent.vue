<template>
     <div>
          <header-component></header-component>
          
        




          <div class="container-fluid">
               <div class="row">
                    <navi-component></navi-component>
                    <router-view @changeSucces='returnsucces' :succes="succes"></router-view>

</div>
          </div>
     </div>
</template>

<script>

import HeaderComponent from './admin/HeaderComponent.vue'
import NaviComponent from './admin/NaviComponent.vue'

export default {

     
     name: "AppComponent",
     data() {
            return {
               succes: null 
            }
        },

     methods: {
          returnsucces (data) {
          this.succes = data
          }
     },

     components: {
     'header-component': HeaderComponent,
     'navi-component': NaviComponent
     }
}
</script>