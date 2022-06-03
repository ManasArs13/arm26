<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div v-for="post in posts" class="card">
                    <div class="card-header">{{post.name}}</div>

                    <div class="card-body">
                        {{post.description}}
                    </div>
                    <button v>ff</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'TestComponent',
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
          
        }
         
        
    }
</script>
