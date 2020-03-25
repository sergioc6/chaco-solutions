<template>
    <v-row justify="center">
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-btn color="primary" dark v-on="on">Nuevo</v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline">Nuevo Cliente</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <clients-form></clients-form>
                    </v-container>
                    <small>*indicates required field</small>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="blue darken-1" text @click="closeModal">Cerrar</v-btn>
                    <v-btn color="blue darken-1" text @click="saveModal">Guardar</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-row>
</template>

<script>
    export default {
        data: () => ({
            dialog: false,
        }),
        methods: {
            closeModal() {
                this.dialog = false;
            },
            saveModal() {

                console.log(this.first_name);
                console.log('save modal');
            }
        }
    }
</script>
