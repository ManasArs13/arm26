<template>
    <div class="container-fluid">
    <div class="row justify-content-center align-items-center" id="banner_row">

        <div class="col-4">
            <form class="d-flex rounded-pill">
                <input class="form-control me-2 rounded-pill" id='banner_input' type="search" placeholder="Поиск по сайту" aria-label="Search">
                <button class="btn btn-warning rounded-circle" id='banner_button' type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></button>
            </form>
        </div>



        <div class="col-6">
            <h1 class="text-end text-warning" id="banner_h1">Услуги в Ставрпополе</h1>

        </div>

    </div>
</div>
</template>

<script>
   
   
   export default {

        name: 'BannerComponent',





    }

</script>