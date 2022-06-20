<template>
    <div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
 
  <div class="carousel-inner">

    <div id="container_carousel" class="row justify-content-center row-cols-6 row-cols-md-2 g-4">
  
  
  <div class="card content_card" v-for="category in categories">
    <a class="content_a" href="">
    <img src="img/categories/stroitelstvo.jpg" class="card-img-top">
    <div class="content_container rounded-pill align-middle bg-white">
       <span>{{category.title}}</span> 
  </div>
  </a>
</div>
  
  
  </div >
</div>
    


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
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