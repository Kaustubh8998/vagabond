<template>
    <div class="row m-0">
        <!-- <trip-card v-for="trip in trips" :trip="trip" v-bind:key="trip.id"></trip-card> -->
        <a :class="'col-sm-' + slide.column_size + ' holder'" :href="slide.link" v-for="slide in slides" v-bind:key="slide.id">
            <div class="landing">
                <img class="" :src="DomainName + slide.image" alt="" width="100%">
                <div class="black">

                    <img v-if="slide.logo != ''" class="" :src="DomainName + slide.logo" alt="" width="100">
            
                    <h3 v-else-if="slide.text != ''">{{ slide.text }}</h3>
                    
                    <p v-if="slide.description != ''">{{ slide.description }}</p>
                    
                </div>
            </div>
        </a>
    </div>
</template>

<script>

    export default {
        data () {
            return {
                slides: null,
                DomainName: window.DomainName,
            }
        },
        mounted() {
            axios.get('/api/slides')
                 .then(response => (this.slides = response.data.slides)); 
        }
    }

</script>

<style scoped>

    .holder {
        padding: 0;
        overflow: hidden;
    }

    a:hover {
        opacity: 1;
    }
    
    .landing {
        position: relative;
    }

    .black h3 {
        color: #333;
        text-transform: uppercase;
        font-weight: 400;
        border: 2px solid #fff;
        display: inline;
        padding: 7px 25px;
        background: #fff
    }

    .black p {
        color: #fff;
        font-size: 15px;
        padding: 30px;
        text-align: justify;
        font-weight: 300;
        letter-spacing: 1px;
        line-height: 22px;
    }

    .black {
        display: none;
    }

    .holder:hover .black {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #0009;
        bottom: 0;
        animation-name: fade-in;
        animation-duration: 1s;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        cursor: pointer;
    }

    @keyframes fade-in {
        from {
            background-color: rgba(189, 185, 185, 0.068);
            height: 0%;
        }
        to {
            background-color: #0009;
            height: 100%;
        }
    }

</style>
