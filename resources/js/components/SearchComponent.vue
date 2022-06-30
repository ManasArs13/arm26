<template>
  <div>


  <input class="form-control me-2 rounded-pill" v-model="keyword" id="banner_input" type="text" placeholder="Поиск по постам">
  <ul class="dropdown-menu dropdown-menu w-50 d-block" v-if="homePosts.length > 0" aria-labelledby="banner_input">
        
          <li><a v-for="homePost in homePosts" class="dropdown-item" href="#">{{ homePost.name }}</a></li>
       
    </ul>
                   



</div>
</template>

<script>

export default {
  name: 'SearchComponent',
 data() {
    return {
      keyword: null,
      homePosts: []
    }

  },
  watch: {
    keyword(after, before) {
      this.searchHome();
    }
  },
  methods: {
    searchHome() {
      axios.get('/api/posts/search', { params: { keywords: this.keyword } })
        .then(response => this.homePosts = response.data)
        .catch(error => { });
    }
  }

}



</script>