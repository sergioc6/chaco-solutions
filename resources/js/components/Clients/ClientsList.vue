<template>
    <v-data-table
        :headers="headers"
        :items="clients"
        :items-per-page="5"
        class="elevation-1"
    >


        <template v-slot:item.actions="{ item }">
            <v-icon
                small
                class="mr-2"
                @click="editItem(item)"
            >
                mdi-pencil
            </v-icon>
            <v-icon
                small
                @click="deleteItem(item)"
            >
                mdi-delete
            </v-icon>
        </template>
    </v-data-table>

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
                    {text: 'Nombre', value: 'first_name'},
                    {text: 'Apellido', value: 'last_name'},
                    {text: 'Email', value: 'email'},
                    {text: 'Dirección', value: 'address'},
                    {text: 'Acciones', value: 'actions'},
                ],
                clients: [],
            }
        },
        mounted() {
            axios
                .get('http://localhost:8000/api/client')
                .then(response => {
                    this.clients = response.data.data;
                })
        },
        methods: {
            editItem(item) {
                console.log('edit');
            },
            deleteItem(item) {
                console.log('delete');
            }
        }
    }
</script>
