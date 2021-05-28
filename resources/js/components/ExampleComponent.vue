<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lisatdo de Personas <span class="badge">{{ personas.length }}</span></div>

                    <div class="card-body">
                        <table class="table table-dark table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombr☻es</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Edad</th>
                                    <th>Email</th>
                                    <th>Habilidades</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="persona in personas" :key="persona.nombres">
                                    <td>0</td>
                                    <td>{{ persona.nombres }}</td>
                                    <td>{{ persona.apellidos }}</td>
                                    <td>{{ persona.cedula }}</td>
                                </tr>
                            </tbody>
                        </table>
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
                total:0,
                personas:[
                    {
                        "nombres":"Jaime",
                        "apellidos":"Santana",
                        "cedula":"1600392359"
                    },
                    {
                        "nombres":"Edisson",
                        "apellidos":"Ibarra",
                        "cedula":"1600392359"
                    },
                    {
                        "nombres":"Manuel",
                        "apellidos":"Guangasig",
                        "cedula":"1600392359"
                    },
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
