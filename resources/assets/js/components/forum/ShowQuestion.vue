<template>
    <v-layout>
        <v-container
                fluid
                grid-list-lg
        >
            <v-flex xs12 sm10 offset-sm1>
                <v-card>
                    <v-card-title primary-title>
                        <div>
                            <h3 class="headline mb-0">{{ data.title }}</h3>
                            <div>{{ data.user.name }} said {{ data.created_at }}
                            </div>
                        </div>
                        <v-spacer></v-spacer>
                        <v-btn color="teal">5 Replies</v-btn>
                    </v-card-title>

                    <v-card-text v-html="data.body"></v-card-text>

                    <!--<v-card-actions>-->
                        <!--<v-btn flat color="orange">Share</v-btn>-->
                        <!--<v-btn flat color="orange">Explore</v-btn>-->
                    <!--</v-card-actions>-->
                </v-card>
            </v-flex>
        </v-container>
    </v-layout>
</template>


<script>
    export default {
        props: ['data']
    }
</script>

<style scoped>

</style>