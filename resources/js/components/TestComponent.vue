<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                ggggg
            </div>
        </div>
   <example-component :posts="posts"></example-component>
   </div>
</template>

<script>
    
    import ExampleComponent from './ExampleComponent.vue';
    export default {
       name: "TestComponent",
        data() {
            return {
                posts: []
            }
        },
        methods: {
             
        },
        mounted() {
            axios.get('http://arm26/api/b')
            .then(response => {
            this.posts = response.data
            });
          
        },
        computed: {
            
        },
        components: {
            'example-component': ExampleComponent
        }  
         
        
    }
</script>
