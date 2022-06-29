<template>
    
        

    <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 shadow">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Все посты</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <router-link  style="text-decoration: none" :to="{ name: 'admin.post.create'}">
            <button type="button" class="btn btn-sm btn-outline-success">Добавить пост</button>
            </router-link>
          </div>
         </div>
      </div>  

<div v-if="succes" class="alert alert-success" role="alert">
 {{succes}}
</div>

<div v-if="isPosts == true" class="alert alert-warning">
        <strong>Постов нет. Нажмите, чтобы создать </strong> 
         <router-link  style="text-decoration: none" :to="{ name: 'admin.post.create'}">
            <button type="button" class="btn btn-sm btn-outline-success">Добавить пост</button>
        </router-link>
</div>


<div v-for="post in posts" class="card border-dark">
                    
  <h5 class="card-header">
    <div class="row g-0">
    <div class="col-sm-6 col-md-8 mb-1">{{post.name}}</div>
    <div class="col-6 col-md-4 mb-1">Автор: {{post.user_id}} ({{post.phone_number}})</div>
  </div>
  </h5>
  <div class="card-body">
   
    <p class="card-text">{{post.description}}</p>
    
<div class="row g-0">
    <div class="col-sm-6 col-md-8 mb-4">Категория: {{post.category_id}}</div>
    <div class="col-6 col-md-4 mb-4">{{post.price }} р.</div>
  </div>

        <router-link  style="text-decoration: none" :to="{ name: 'admin.post.edit', params: { id: post.id} }">
            <a href="#" class="btn btn-outline-primary">редактировать</a>
        </router-link>
    
    <a @click.prevent='deletePost(post.id)' href="#" class="btn btn-outline-danger">удалить</a>

  </div>
</div>


    </main>



    
</template>

<script>
  
  export default {
    data() {
      return {
        posts: null,
        isPosts: false,
        succes: null,
      }
    },

   props: ['succesPost'],

    methods: {
      deletePost(id) {
        axios.delete('http://arm26/api/post/' + id)
        .then(response => 
            this.getPosts())
      this.succes = 'Этот пост успешно удалён'
      },
     getPosts () {
        axios.get('http://arm26/api/post')
            .then(response => {
            this.posts = response.data
            })         
     },
        ifPosts () {
              if(this.posts.length == 0) {
                this.isPosts = true;
              }
        }
      },

    


    beforeMount() {
        this.getPosts(),
        this.succes = this.succesPost
    },

    updated() {
      this.ifPosts()
    },

    destroyed() {
      
      this.$emit('changeSuccesPost', null)
    },
}


</script>