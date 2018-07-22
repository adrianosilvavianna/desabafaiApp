<template>
    <v-layout>
        <v-flex>
            <v-card>
                <v-card-title primary-title>
                    <div>
                        <h3 class="headline mb-0">
                            <router-link :to="data.path">
                                {{ data.title }}
                            </router-link>

                        </h3>
                        <div class="grey--text">
                            {{ data.user.name }}    said
                            {{ data.created_at }}
                        </div>
                    </div>
                </v-card-title>
                <v-card-text>
                    {{ data.body }}
                </v-card-text>
            </v-card>
        </v-flex>
    </v-layout>

</template>

<!--<template>-->
    <!--<v-layout>-->
        <!--<v-flex xs12 sm6 offset-sm3>-->
            <!--<v-card>-->
                <!--<v-card-media-->

                <!--&gt;-->
                    <!--<v-container fill-height fluid>-->
                        <!--<v-layout fill-height>-->
                            <!--<v-flex xs12 align-end flexbox>-->
                                <!--<span class="headline">Top 10 Australian beaches</span>-->
                            <!--</v-flex>-->
                        <!--</v-layout>-->
                    <!--</v-container>-->
                <!--</v-card-media>-->
                <!--<v-card-title>-->
                    <!--<div>-->
                        <!--<span class="grey&#45;&#45;text">Number 10</span><br>-->
                        <!--<span>Whitehaven Beach</span><br>-->
                        <!--<span>Whitsunday Island, Whitsunday Islands</span>-->
                    <!--</div>-->
                <!--</v-card-title>-->
                <!--<v-card-actions>-->
                    <!--<v-btn flat color="orange">Share</v-btn>-->
                    <!--<v-btn flat color="orange">Explore</v-btn>-->
                <!--</v-card-actions>-->
            <!--</v-card>-->
        <!--</v-flex>-->
    <!--</v-layout>-->
<!--</template>-->

<script>
    export default {

        props: ['data']
    }
</script>

<style scoped>

</style>