<template>



  <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 shadow">
    <div
      class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Информационная панель</h1>

    </div>


    <div class="row row-cols-1 row-cols-md-3 g-4">

      <div class="col">
        <div class="card bg-dark text-white">

          <div class="card-body">
            <p class="card-text">Категорий: {{ categories.length }}</p>

          </div>
        </div>
      </div>

      <div class="col">
        <div class="card bg-dark text-white">

          <div class="card-body">
            <p class="card-text">Услуг: {{ posts.length }}</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card bg-dark text-white">

          <div class="card-body">
            <p class="card-text">Пользователей: {{ users.length }}</p>
          </div>
        </div>
      </div>
    </div>





  </main>




</template>

<script>

export default {
  data() {
    return {
      posts: [],
      users: [],
      categories: []

    }
  },



  methods: {
    getCategories() {
      axios.get('http://arm26/api/category')
        .then(response => {
          this.categories = response.data

        })

    },
    getPosts() {
      axios.get('http://arm26/api/post')
        .then(response => {
          this.posts = response.data
        })
    },
    getUsers() {
      axios.get('http://arm26/api/user')
        .then(response => {
          this.users = response.data
        })
    },

  },



  mounted() {
    this.getPosts(),
      this.getUsers(),
      this.getCategories()

  }

}



</script>