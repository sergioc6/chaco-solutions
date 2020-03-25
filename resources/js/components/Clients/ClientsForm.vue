<template>
    <v-form
        ref="form"
        lazy-validation
    >
        <v-row>
            <v-col cols="12" sm="6" md="6">
                <v-text-field v-model="first_name" label="Nombre*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="6">
                <v-text-field v-model="last_name" label="Apellido" required></v-text-field>
            </v-col>
            <v-col cols="12">
                <v-text-field v-model="email" label="Email*" required></v-text-field>
            </v-col>
            <v-col cols="12">
                <v-text-field v-model="address" label="Dirección*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="6">
                <v-text-field v-model="phone" label="Teléfono fijo"></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="6">
                <v-text-field v-model="mobile_phone" label="Teléfono móvil*" required></v-text-field>
            </v-col>
        </v-row>
    </v-form>
</template>

<script>
    export default {
        data() {
            return {
                first_name: null,
                last_name: null,
                email: null,
                address: null,
                phone: null,
                mobile_phone: null
            }
        }
    }
</script>
