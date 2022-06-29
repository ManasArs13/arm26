<template>
    
        

    <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 shadow">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Создание поста</h1>
        
      </div>  



<form>
  <div class="row mb-3">
    <label for="inputName" class="col-sm-2 col-form-label">Название</label>
    <div class="col-sm-10">
      <input type="text" v-model="post.name" id="inputName" class="form-control" name="name" required>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
    <div class="col-sm-10">
      <input type="text" v-model="post.description" class="form-control" name="description">
    </div>
  </div>
    <div class="row mb-3">
    <label for="inputPhone" class="col-sm-2 col-form-label">Номер телефона</label>
    <div class="col-sm-10">
      <input type="text" v-model="post.phone_number" class="form-control" name="phone_number" placeholder="+7-ххх-ххх-хх-хх" >
    </div>
  </div>
      <div class="row mb-3">
    <label for="inputPrice" class="col-sm-2 col-form-label">Цена</label>
    <div class="col-sm-10">
      <input type="text" v-model="post.price" class="form-control" name="price">
    </div>
  </div>


<div class="row mb-3">
    <label for="inputUser" class="col-sm-2 col-form-label">Автор</label>
    <div class="col-sm-10">
      <select v-model="post.user_id" class="form-select w-50" >
      
      <option disabled value="">Выберите...</option>
      <option v-bind:value="user.id" v-for="user in users">{{user.name}}</option>
    </select>
    </div>
  </div>


<div class="row mb-3">
    <label for="inputCategory" class="col-sm-2 col-form-label">Категория</label>
    <div class="col-sm-10">
      <select v-model="post.category_id" class="form-select w-50">
  
        <option disabled value="">Выберите...</option>
        <option v-bind:value="category.id" v-for="category in categories">{{category.title}}</option>
 
      </select>
    </div>
  </div>



<div class="row mb-3 justify-content-center">
  <div class="col-md-4">
  <input type="submit" @click.prevent="store" class="btn btn-success btn-lg w-50" value="создать">
</div>
</div>

</form>


    </main>



    
</template>

<script>
  
  import router from '../../../router';

  export default {
    data() {
      return {
        valid: 'is-valid',
        invalid: 'is-invalid',
        succesPost: 'Пост успешно создан',
        users: [],
        categories: [],
        post: {
          name: null,
          description: null,
          category_id: '',
          user_id: '',
          phone_number: null,
          price: null,
        },
      }
    },

    
    methods: {
      store() {
        
        axios.post('http://arm26/api/post',  {post: this.post})
        .then(response => {
          router.push({path: '/admin/post'})
        });
        this.$emit('changeSuccesPost', this.succesPost)


      }
    },

    mounted() {
            axios.get('http://arm26/api/category')
            .then(response => {
            this.categories = response.data
            });
            axios.get('http://arm26/api/user')
            .then(response => {
            this.users = response.data
            });
        },

  }


</script>