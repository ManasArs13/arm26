<template>
    
        

    <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 shadow">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Создание категории</h1>
        
      </div>  



<form @submit="store" enctype="multipart/form-data">
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
    
  <div class="row mb-3">
  <label for="inputImg" class="col-sm-2 col-form-label">Картинка для категории</label>
  <div class="col-sm-10 mt-3">
  <input type="file"  v-on:change="onChange">
  </div>
</div>

      


<div class="row mb-3 justify-content-center">
  <div class="col-md-4">
  <button class="btn btn-success btn-lg w-50">создать</button>
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
        img: null,
        succesCategory: 'Категория успешно создана',
        category: {
          title: null,
          sort_id: null,
          
        },
        
      }
    },

    methods: {
       onChange(e) {
                 this.img = e.target.files[0];
            },
      store(e) {
         e.preventDefault();
 
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }
               const data = new FormData();
               data.append('title', this.category.title);
               data.append('sort_id', this.category.sort_id);
                data.append('img', this.img);

     axios.post('http://arm26/api/category',  data, config)
        .then(response => {
          router.push({path: '/admin/category'})
        });
        this.$emit('changeSuccesCategory', this.succesCategory)
          
      },
     
    },
   
  }


</script>