<template>
    <div>
        <div class="container-fluid p-0">
            <div class="d-flex justify-content-center heading">
                <h2>{{ category.name }}</h2>
            </div>
        </div>
        <div class="container">

            <div class="d-flex justify-content-center">
                <p class="description">{{ category.description }}</p>
            </div>

            <div class="container">
                <div class="row trip-item">
                    <TripCard v-for="trip in trips" :trip="trip" v-bind:key="trip.id"></TripCard>
                </div>
            </div>

        </div>
    </div>
</template>

<script>

    import TripCard from './includes/TripCard.vue';

    export default {
        components: {
            TripCard
        },
        data () {
            return {
                DomainName: window.DomainName,
                category: null,
                trips: []
            }
        },
        watch: {
            '$route' (to, from) {
                axios.get('/api/category/' + to.params.slug)
                    .then(response => (
                        this.category = response.data.category,
                        this.trips = response.data.trips
                    ))
            }
        }, 
        mounted() {
            axios.get('/api/category/' + this.$route.params.slug)
                    .then(response => (
                        this.category = response.data.category,
                        this.trips = response.data.trips
                    ))
            
        }
    }
</script>

<style scoped>
    .heading {
        background: #eee;
        text-align: center;
    }

    .heading h2 {
        text-transform: uppercase;
        font-weight: 400;
        border: 2px solid #333;
        display: inline;
        padding: 15px 30px;
        margin: 20px 0;
    }

    .description {
        text-align: center;
        padding: 30px 0 10px 0;
        font-weight: 300;
    }
    
</style>

