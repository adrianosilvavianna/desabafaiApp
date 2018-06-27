<template>
    <v-container>
        <v-form @submit.prevent="signup">

            <v-text-field
                    v-model="form.name"
                    label="Name"
                    required
            ></v-text-field>

            <v-text-field
                    v-model="form.email"
                    :rules="emailRules"
                    label="E-mail"
                    type="email"
                    required
            ></v-text-field>

            <v-text-field
                    v-model="form.password"
                    label="Password"
                    type="password"
                    required
            ></v-text-field>

            <v-text-field
                    v-model="form.password_confirmation"
                    label="Password Confirmation"
                    type="password"
                    class="blocked"
                    required
            ></v-text-field>

            <v-btn
                    block
                    round
                    color="secondary"
                    type="submit"
                    >
                Register
            </v-btn>

        </v-form>

    </v-container>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                    password_confirmation: null,
                }
            }
        },

        methods: {
            siginup() {

            }
        },
    }
</script>

<style scoped>

</style>