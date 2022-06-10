<template>
    

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><ya-tr-span data-index="0-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Company name" data-translation="Название компании" data-type="trSpan" data-selected="false">Администратор</ya-tr-span></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Переключение навигации">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 bg-dark border-white text-white" type="text" placeholder="Поиск" aria-label="Поиск">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#"><ya-tr-span data-index="1-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Sign out" data-translation="Выход" data-type="trSpan" data-selected="false">Выход</ya-tr-span></a>
    </li>
  </ul>
</header>



</template>

<script>
    export default {
        name: 'HeaderComponent',
        mounted() {
            console.log('Component mounted.')
        },
        
    }
</script>