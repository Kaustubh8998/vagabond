<template>
    <div>
        <landing></landing>
        <div class="container-fluid p-0">

            <div class="upcoming-section">

                <div class="d-flex justify-content-center heading pt-4">
                    <h2>Upcoming Trips</h2>
                </div>

                <div class="container">
                    <div class="row justify-content-center trip-holder">
                        <TripCard v-for="trip in trips" :trip="trip" v-bind:key="trip.id"></TripCard>
                    </div>
                </div>

            </div>

            <div class="testimonial-section">

                <div class="container">
                    <div class="row justify-content-center">
                        <testimonials :testimonials="testimonials"></testimonials>
                    </div>
                </div>

            </div>

        </div>   
    </div>
</template>

<script>

    import landing from "./includes/Landing.vue";
    import testimonials from "./includes/Testimonial.vue";
    import TripCard from './includes/TripCard.vue';

    export default {
        components: {
            landing,
            testimonials,
            TripCard
        },
        data () {
            return {
                trips: null,
                testimonials: null,
                DomainName: window.DomainName
            }
        },
        mounted() {
            axios.get('/api/upcoming-trips')
                 .then(response => (this.trips = response.data.trips)); 
            axios.get('/api/testimonials')
                 .then(response => (this.testimonials = response.data.testimonials));   
        }
    }

</script>

<style>

    .light {
        background: #eee;
    }

    .card-header {
        font-size: 20px;
    }

    .categoryImage {
        width: 100%;
    }

    .category-section {
        height: 300px;
        overflow: hidden;
        margin-top: 20px;
        position: relative;
        padding: 0;
    }

    .category-matter {
        position: absolute;  
        color: #fff;
        width: 100%;
        height: 100%;
        top: 0;
        padding: 20px;
        background: #17151580;
    }

    .heading {
        text-align: center;
    }

    .heading h2 {
        text-transform: uppercase;
        font-weight: 400;
        border: 2px solid #333;
        display: inline;
        padding: 15px 30px;
        margin: 40px 0;
    }

    .trip-holder {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .testimonial-section {
        background-image: url('/img/testimonialbg.png');
        background-size: cover;
        height: calc(100vh - 80px);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .upcoming-section {
        height: calc(100vh - 80px);
    }

    .trip-btn {
        color: #fff;
        border: #fff 1px solid;
        margin: 10px;
    }

    .trip-btn:hover {
        color: #000;
        background: #fff;
        opacity: 1;
    }

</style>