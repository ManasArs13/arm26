<template>
    
        

    <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 shadow">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактирование категории</h1>
       
      </div>  



<form>
  <div class="row mb-3">
    <label for="inputName" class="col-sm-2 col-form-label">Название</label>
    <div class="col-sm-10">
      <input type="text" v-model="category.title" class="form-control" name="title">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputDescription" class="col-sm-2 col-form-label">Порядок сортировки</label>
    <div class="col-sm-10">
      <input type="text" v-model="category.sort_id" class="form-control" name="sort_id">
    </div>
  </div>
    
<div class="row mb-3 justify-content-center">
  <div class="col-md-4">
  <input type="submit" @click.prevent="update" class="btn btn-success btn-lg w-50" value="Обновить">
   </div>
  </div>
</form>


    </main>



    
</template>

<script>
  
  import router from '../../router';

  export default {
    data() {
      return {
      succes: 'Категория успешно обнавлена',
       category: {
        title: null,
        sort_id: null,
       },
      }
    },

    methods: {
      update() {
        axios.put('http://arm26/api/category/' + this.$route.params.id,  {category: this.category})
        .then(response => {
          router.push({path: '/admin/category'})
        });
        this.$emit('changeSuccesCategory', this.succes)


      }
    },

   

  }


</script>