<template>
    <div class="container">

<h2>Категории услуг</h2>




<div class="row row-cols-3">
    <div class="col" v-for="category in categories"><img :src="'storage/' +category.img" class="category_img"><span><strong>{{category.title}}</strong></span></div>
</div>






</div>







</template>

<script>
   
   
   export default {

        name: 'ContentComponent',

        data() {
            return {
                categories: null,
            }
        },

        methods: {
             getCategories () {
                axios.get('http://arm26/api/category')
                .then(response => {
                this.categories = response.data
                })         
             },
        },

        mounted() {
            this.getCategories();

        },

    }

</script>