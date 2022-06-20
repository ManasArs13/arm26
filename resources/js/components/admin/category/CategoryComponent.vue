<template>
    
        

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Все категории</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <router-link  style="text-decoration: none" :to="{ name: 'admin.category.create'}">
            <button type="button" class="btn btn-sm btn-outline-success">Добавить категорию</button>
            </router-link>
          </div>
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


<div v-if="isCategories == true" class="alert alert-warning">
        <strong>Категорий нет. Нажмите, чтобы создать </strong> 
         <router-link  style="text-decoration: none" :to="{ name: 'admin.category.create'}">
            <button type="button" class="btn btn-sm btn-outline-success">Добавить пост</button>
        </router-link>
</div>


<div v-for="category in categories" class="card border-primary">
                    
  <h5 class="card-header">
    <div class="row g-0">
    <div class="col-sm-6 col-md-8 mb-1">{{category.title}}</div>
    <div class="col-6 col-md-4 mb-1">Порядок сортировки: {{category.sort_id}}</div>
  </div>
  </h5>
  <div class="card-body">
   
    <p class="card-text">Порядок сортировки: {{category.id}}</p>
     <router-link  style="text-decoration: none" :to="{ name: 'admin.category.edit', params: { id: category.id} }">
            <a href="#" class="btn btn-outline-primary">редактировать</a>
        </router-link>
    
    <a  @click.prevent='deleteCategory(category.id)' href="#" class="btn btn-outline-danger">удалить</a>

  </div>
</div>


    </main>



    
</template>

<script>
  
  export default {
    data() {
      return {
        categories: null,
        isCategories: false,
        danger: null,
        succesDelete: null,
        succes: null,
      }
    },

   props: ['succesCategory'],

    methods: {
       
      deleteCategory(id) {
            axios.get('http://arm26/api/category/' + id)
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
            })
      },
      
     getCategories () {
        axios.get('http://arm26/api/category')
            .then(response => {
            this.categories = response.data
            })         
     },
        ifCategories () {
              if(this.categories.length == 0) {
                this.isCategories = true;
              }
        },
        

      },

    

    beforeMount() {
        this.getCategories();
        this.succes = this.succesCategory
    },

   

    updated() {
      this.ifCategories()
    },

  }

</script>