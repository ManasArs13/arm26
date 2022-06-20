<template>
    
        

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактирование пользователя</h1>
       
      </div>  



<form>
  <div class="row mb-3">
    <label for="inputName" class="col-sm-2 col-form-label">Имя</label>
    <div class="col-sm-10">
      <input type="text" v-model="user.name" class="form-control" name="name">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputDescription" class="col-sm-2 col-form-label">Емайл</label>
    <div class="col-sm-10">
      <input type="text" v-model="user.email" class="form-control" name="email">
    </div>
  </div>
    
  <div class="form-check">
  <input class="form-check-input" type="checkbox" v-model="user.admin" true-value="1"  false-value="0" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Администратор
  </label>
</div>

  <input type="submit" @click.prevent="update" class="btn btn-primary" value="Обновить">
</form>


    </main>



    
</template>

<script>
  
  import router from '../../../router';

  export default {
    data() {
      return {
      succes: 'Пользователь успешно обнавлён',
       user: {
        name: null,
        email: null,
        admin: null,
       },
      }
    },

    methods: {
      update() {
        axios.put('http://arm26/api/user/' + this.$route.params.id,  {user: this.user})
        .then(response => {
          router.push({path: '/admin/user'})
        });
        this.$emit('changeSuccesUser', this.succes)


      }
    },

   

  }


</script>