<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{details.name}}</div>

                    <div class="card-body">
                        {{details.message}}
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

                  details:{

                      name:'Sardar',
                      message:'My name is Sardar',
                  }
              }  

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
