<template>

    <!--<v-toolbar>-->
        <!--<v-toolbar-side-icon></v-toolbar-side-icon>-->
        <!--<v-toolbar-title>Desabafai</v-toolbar-title>-->
        <!--<v-spacer></v-spacer>-->
        <!--<div class="hidden-sm-and-down">-->

            <!--<router-link-->
            <!--v-for="item in items"-->
            <!--:key="item.title"-->
            <!--:to="item.to"-->
            <!--v-if="item.show">-->
                <!--<v-btn flat>{{ item.title }}</v-btn>-->
            <!--</router-link>-->

        <!--</div>-->

    <!--</v-toolbar>-->

    <v-toolbar dark color="blue darken-3">
        <v-toolbar-side-icon></v-toolbar-side-icon>
        <v-toolbar-title class="white--text">Desabafai</v-toolbar-title>
        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>search</v-icon>
        </v-btn>
        <v-btn icon>
            <v-icon>apps</v-icon>
        </v-btn>
        <v-btn icon>
            <v-icon>refresh</v-icon>
        </v-btn>

        <v-menu
                transition="slide-x-transition"
                bottom
                right
        >
            <v-btn slot="activator" icon>
                <v-icon>more_vert</v-icon>
            </v-btn>
            <v-list>
                <v-list-tile
                    v-for="item in items"
                    :key="item.title"
                    :to="item.to"
                    v-if="item.show"
                >
                    <v-list-tile-title>
                        <v-icon>{{ item.icon }}</v-icon>
                        {{ item.title }}
                    </v-list-tile-title>
                </v-list-tile>
            </v-list>
        </v-menu>

    </v-toolbar>

</template>

<script>

    export default {
         data(){
             return {
                 items:[
                     {title: 'Forum', to:'/forum', show:true, icon:'dialpad'},
                     {title: 'Login', to:'/login', show: !User.loggedIn(), icon: 'sign'},
                     {title: 'Desabafe', to:'/asks', show: User.loggedIn(), icon:'chat'},
                     {title: 'Categoria', to:'/category', show: User.loggedIn(), icon:'call_split'},
                     {title: 'Logout', to:'/logout', show: User.loggedIn(), icon:'exit_to_app'},
                 ]
             }
         }
    }

</script>

<style>


</style>