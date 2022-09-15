<template>
    <div>
        <div class="container-fluid p-0">
            <div class="d-flex justify-content-center trips-heading">
                <h2>All Experiences</h2>
            </div>
            <div class="d-flex justify-content-center trips-heading">
                <form @submit.prevent="filterTrips" class="m-3">  
                    <div class="row">  
                        <div class="col-sm-4">
                            <input type="text" v-model="search.name" placeholder="Where to ?" name="search" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <select name="order" id="order" v-model="search.order" class="form-control">
                                <option value="upcoming">Upcoming</option>
                                <option value="pricehtol">Price(High To Low)</option>
                                <option value="priceltoh">Price(Low To High)</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-success my-btn" type="submit">Search <img :src="DomainName + '/svg/compass-circle.svg'" alt="" class="svgSearch"></button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
        <div class="container">
            <div class="row trip-item">
                <TripCard v-for="trip in trips" :trip="trip" v-bind:key="trip.id"></TripCard>
            </div>
        </div>
    </div>
</template>

<style scoped>

    .trips-heading {
        background: #eee;
        text-align: center;
    }

    .trips-heading h2 {
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

    .my-btn {
        width: 100%;
    }

    .svgSearch {
        width: 20px;
        margin-top: -5px;
    }
    
</style>


<script>

    import TripCard from "./includes/TripCard.vue";

    export default {
        components: {
            TripCard
        },
        data () {
            return {
                trips: [],
                search: {
                    name: '',
                    order: 'upcoming'
                },
                DomainName: window.DomainName
            }
        },
        methods: {
            filterTrips: function(submitEvent) {
                // this.search.map((params) => {
                //     console.log(params);
                    
                // });
                console.log(this.search);
                
                fetch('api/trips', {
                    method: 'post',
                    body: JSON.stringify(this.search),
                    headers: {
                        'content-type': 'application/json'
                    }
                }).then(res => res.json())
                .then(res => {
                    console.log(res);
                    this.trips = res.trips;
                })
                .catch(err => console.log(err));
            }
        },
        mounted() {
            axios.post('/api/trips')
                 .then(response => (this.trips = response.data.trips));   
        }
    }
</script>
