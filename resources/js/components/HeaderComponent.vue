<template>


  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <p class="navbar-brand col-md-3 col-lg-2 m-0 px-3">АДМИНИСТРАТОР</p>
    <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
      aria-label="Переключение навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="w-100">
      <input class="form-control form-control-dark w-100" v-model="keywords" type="text" placeholder="Поиск"
        aria-label="inputSearch">

      <ul class="dropdown-menu dropdown-menu-dark w-50 d-block" v-if="posts.length > 0" aria-labelledby="inputSearch">
        <router-link v-for="post in posts" style="text-decoration: none"
          :to="{ name: 'admin.post.edit', params: { id: post.id } }">
          <li><a v-on:click="keywords = null" class="dropdown-item" href="#">{{ post.name }}</a></li>
        </router-link>
      </ul>
    </div>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="http://arm26/">Выход</a>
      </li>
    </ul>
  </header>



</template>

<script>
export default {
  name: 'HeaderComponent',
  data() {
    return {
      keywords: null,
      posts: []
    }

  },
  watch: {
    keywords(after, before) {
      this.search();
    }
  },
  methods: {
    search() {
      axios.get('/api/posts/search', { params: { keywords: this.keywords } })
        .then(response => this.posts = response.data)
        .catch(error => { });
    }
  }
}
</script>