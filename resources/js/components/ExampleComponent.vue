<template>
    
        <div class="row justify-content-center">
            
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edddd1Component</div>

                    <div class="card-body">
                        I'm an exax component. 
                    </div>
                    <div v-for="post in posts">{{ post.name}}</div>
                </div>
            </div>
        </div>
         
    
       
</template>

<script>

    

    export default {
        props: ['posts'],
        name: 'ExampleComponent',
        mounted() {
            console.log('Component mounted.')
        },
        
    }
</script>
<div v-if="succes" class="alert alert-success" role="alert">
 {{succes}}
</div>