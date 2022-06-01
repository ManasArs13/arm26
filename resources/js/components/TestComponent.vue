<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">test</div>

                    <div class="card-body">
                        I'm test.sss
                    </div>
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
                info: []
            }
        },
        
        mounted() {
            axios.get('http://arm26/api/b')
            .then(response => {
            this.info = response.data
            })
        },
    }
</script>
