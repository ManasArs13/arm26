<template>
     <div class="container">
        <router-link :to="{ name: 'one' }">one</router-link> |
        <router-link :to="{ name: 'two' }">two</router-link>
        
        <div>индекс</div>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
     name: "AppComponent",
}
</script>