<template>
    <v-data-table
        :headers="headers"
        :items="providers"
        :items-per-page="5"
        class="elevation-1"
    ></v-data-table>
</template>

<script>
    export default {
        data() {
            return {
                headers: [
                    {
                        text: 'ID',
                        align: 'start',
                        sortable: false,
                        value: 'id',
                    },
                    {text: 'Nombre', value: 'name'},
                    {text: 'Ciudad', value: 'city'},
                    {text: 'Dirección', value: 'address'},
                    {text: 'Acciones', value: 'iron'},
                ],
                providers: [],
            }
        },
        mounted() {
            axios
                .get('http://localhost:8000/api/provider')
                .then(response => {
                    this.providers = response.data.data;
                })
        }
    }
</script>
