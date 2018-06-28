<template>

    <v-container>

        <v-form @submit.prevent="login">

            <v-text-field
                    v-model="form.email"
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

            <v-btn
                    color="blue"
                    type="submit"
            >Login
            </v-btn>

        </v-form>

        <router-link to="/signup">
            <v-btn flat>Sign Up</v-btn>
        </router-link>

    </v-container>

</template>

<script>
    export default {
        data() {
            return {
                form: {
                    email: null,
                    password: null
                }
            }
        },

        created(){
            if(User.loggedIn()){
                this.$router.push({name:'forum'})
            }
        },

        methods:{
            login(){
                User.login(this.form)
                this.$router.push({name:'forum'})
            }
        },
    }
</script>

<style scoped>

</style>