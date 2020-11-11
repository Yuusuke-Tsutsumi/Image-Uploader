<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.{{title}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                title: "Header",
                text: "Hello Vue.js!"
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
