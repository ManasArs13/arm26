<template>
    <div class="container-fluid">
  d
</div>
</template>

<script>
   
   
   export default {

        name: 'ContentComponent',

        data() {
            return {
                categories: null,
            }
        },

        methods: {
             getCategories () {
                axios.get('http://arm26/api/category')
                .then(response => {
                this.categories = response.data
                })         
             },
        },

        mounted() {
            this.getCategories();
            
        },

    }

</script>