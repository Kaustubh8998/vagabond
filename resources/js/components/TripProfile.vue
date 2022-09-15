<template>
    <div>
        <div class="container-fluid p-0">
            <img :src="DomainName + trip.banner" :alt="trip.name" class="banner_image">
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-8">

                    <h2 class="heading">{{ trip.name }}</h2>
                    <p class="category">{{ trip.category.name }}</p>

                    <!-- <p class="bullet">Description</p> -->
                    <p class="description" v-html="trip.description"></p>

                    <p class="bullet">Location</p>
                    <p class="description"><img :src="DomainName + '/svg/placeholder.svg'" alt=""> {{ trip.location }}</p>

                    <p class="bullet">Difficulty</p>
                    <p class="description">{{ trip.difficulty_level }}</p>

                    <p v-if="trip.sleeping_bag_rental != 0" class="bullet">Sleeping Bag Rental</p>
                    <p v-if="trip.sleeping_bag_rental != 0" class="description">{{ trip.sleeping_bag_rental }}</p>

                    <Details :details="trip.details"></Details> 

                    <Carousel :images="trip.images"></Carousel>
    
                </div>
                <div class="col-md-4">
                    <div class="price-info-holder">

                        <h3><img :src="DomainName + '/svg/rupee-indian.svg'" alt="">{{ trip.cost }}</h3>

                        <p class="dates" v-for="date in trip.upcoming" v-bind:key="date.id"><img :src="DomainName + 'svg/calendar.svg'" alt=""> {{ date.event_date }}</p>

                        <p class="duration"><img :src="DomainName + 'svg/day.svg'" alt=""> {{ trip.duration }}</p>

                        <div v-if="testimonial" class="testimonial">
                            <p class="test-text">
                                <img :src="DomainName + 'svg/left-quotation-mark.svg'" alt="">
                                {{ testimonial.text }}
                                <img :src="DomainName + 'svg/right-quotation-mark.svg'" alt="">
                            </p>
                            <p class="test-name">{{ testimonial.name }}</p>
                        </div>

                        <a href="" class="btn btn-info book-btn">Book Now</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>

    h2.heading {
        text-transform: uppercase;
        font-weight: 500;
        padding: 15px 0px 0;
        margin: 20px 0 0;
        text-align: left;
    }

    p.category {
        text-transform: uppercase;
        font-weight: 400;
        padding-left: 2px;
    }

    p.bullet {
        text-transform: capitalize;
        font-weight: 600;
        padding: 0;
        margin: 0 0 10px 0;
        font-size: 16px;
        color: #333;
    }

    .description {
        padding: 0px 0 10px 0;
        font-weight: 500;
        font-size: 14px;
    }

    .description img {
        width: 21px;
    }

    .inexclusions {
        padding: 5px 0 10px 0;
        font-weight: 500;
        font-size: 14px;
    }

    .inexclusions img {
        margin: 0 10px 0 0;
        width: 18px;
    }

    .banner_image {
        width: 100%;
    }

    .price-info-holder {
        width: 100%;
        background: #fff;
        border: 2px solid #444;
        margin-top: -70px;
        position: sticky;
        top: 100px;
    }

    .price-info-holder h3 {
        text-align: center;
        padding: 16px 0;
        font-size: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        border-bottom: 1px solid #eee;
        color: #f33611;
    }

    .price-info-holder h3 img{
        height: 22px;
    }

    .book-btn {
        background: #f33611;
        border: 0;
        border-radius: 0;
        width: 80%;
        margin: 15px 10% 22px;
        padding: 12px;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 3px;
    }

    .dates, .duration {
        text-align: center;
        letter-spacing: 2px;
        font-weight: 500;
        text-transform: uppercase;
        padding: 20px 0 0 0;
    }

    .dates img{
        width: 23px;
    }

    .duration img {
        width: 38px;
    }

    .testimonial {
        padding: 10px 20px;
        text-align: center;
    }

    .testimonial .test-name {
        font-size: 14px;
    }

    .testimonial .test-text {
        font-weight: 600;
        margin-bottom: 4px;
    }

    .testimonial img {
        height: 10px;
        margin: -15px 0 0 -5px;
    }

    .testimonial img:last-of-type {
        height: 10px;
        margin: -15px -5px 0 0;
    }
    
</style>


<script>

    import Carousel from './includes/Carousel.vue';
    import Details from './includes/Details.vue';

    export default {
        components: {
            Carousel,
            Details
        },
        data () {
            return {
                trip: null,
                DomainName: window.DomainName,
                testimonial: null
            }
        },
        watch: {
            '$route' (to, from) {
                axios.get('/api/trip/' + to.params.slug)
                 .then(response => (this.trip = response.data.trip))
            }
        }, 
        mounted() {
            axios.get('/api/trip/' + this.$route.params.slug)
                 .then(response => 
                        (
                            this.trip = response.data.trip,
                            this.testimonial = response.data.testimonial

                        )
                    )
            
        }
    }
</script>
