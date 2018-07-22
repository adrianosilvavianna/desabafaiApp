<template>

    <show-question
        :data="question"
    ></show-question>
    
</template>

<script>
    import ShowQuestion from './ShowQuestion';

    export default {

        data(){
            return{
                question:{}
            }
        },
        created(){
            axios.get(`/api/question/${this.$route.params.slug}`)
                .then(res => this.question = res.data.data)
        },
        components:{
            ShowQuestion
        }
    }
</script>

<style scoped>

</style>