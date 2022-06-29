<template>
    
        

    <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 shadow">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Все пользователи</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          
         </div>
      </div>  

<div v-if="succesDelete" class="alert alert-success" role="alert">
 {{succesDelete}}
</div>

<div v-if="succes" class="alert alert-success" role="alert">
 {{succes}}
</div>

<div v-if="danger" class="alert alert-danger" role="alert">
  {{danger}}
</div>




<div v-for="user in users" class="card border-dark">
                    
  <h5 class="card-header">
    <div class="row g-0">
    <div class="col-sm-6 col-md-8 mb-1">{{user.name}}  <span v-if="user.admin == 1" class="badge bg-warning text-dark">Администратор</span></div>
     
    </div>
     </h5>
  <div class="card-body">
   
    <p class="card-text">Email: {{user.email}}</p>
    

        <router-link  style="text-decoration: none" :to="{ name: 'admin.user.edit', params: { id: user.id} }">
            <a href="#" class="btn btn-outline-primary">редактировать</a>
        </router-link>
    
    <a  @click.prevent='deleteCategory()' href="#" class="btn btn-outline-danger">удалить</a>

  </div>
</div>


    </main>



    
</template>

<script>
  
  export default {
    data() {
      return {
        users: null,
        isCategories: false,
        
        danger: null,
        succesDelete: null,
        succes: null,
      }
    },

   props: ['succesCategory'],

    methods: {
     
      deleteCategory(id) {
 /*             axios.get('http://arm26/api/category/' + id)
            .then(response => {
              if (response.data == 'Постов нет') {
                this.danger = 'Невозможно удалить. В категории есть посты';
                this.succesDelete = null;
                this.succes = null;
              } else {
                 axios.delete('http://arm26/api/category/' + id)
                 .then(response => {this.getCategories()});
                 this.succesDelete = 'Эта категория успешно удалена';
                 this.danger = null;
                 this.succes = null;
              }
            })*/
      },
      
     getUsers () {
        axios.get('http://arm26/api/user')
            .then(response => {
            this.users = response.data
            })         
     },/*
        ifCategories () {
              if(this.categories.length == 0) {
                this.isCategories = true;
              }
        },*/
        

      },

    

    beforeMount() {
        this.getUsers();
        this.succes = this.succesCategory
    },

   
/*
    updated() {
      this.ifCategories()
    },
*/
  }

</script>