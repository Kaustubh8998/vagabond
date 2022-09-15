<template>
    <div class="details">
        <div v-for="detail in details" v-bind:key="detail.id">
            <h3 class="detail-title">{{ detail.title }}</h3>
            <div class="normalizer" v-html="detail.text"></div>
        </div>
    </div>    
</template>

<script>
    export default {
        data () {
            return {

            }
        },
        props: ['details']
    }
</script>

<style>

    .detail-title {
        text-transform: capitalize;
        font-weight: 600;
        padding: 0;
        margin: 0 0 10px 0;
        font-size: 16px;
        color: #333;
    }

    .normalizer p {
        margin: 0;
    }

    .normalizer p, .normalizer li, .normalizer div, .normalizer span, .normalizer a, .normalizer {
        font-weight: 400;
        font-size: 14px;
        padding-bottom: 8px;
    }

</style>


