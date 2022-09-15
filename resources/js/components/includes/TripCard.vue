<template>
    <div class="col-md-4 p-0">
        
        <div class="trip-card">
            <img :src="DomainName + trip.image" class="tripImage">
            <div class="trip-info">
                <div>
                    <div class="d-flex justify-content-between trip-details">
                        <img :src="DomainName + '/svg/compass.svg'" alt="" class="svgSwag">
                    </div>

                    <div class="d-flex justify-content-between trip-details">
                        <div class="trip-name">{{ trip.name }}</div>
                    </div>
                    <div class="d-flex justify-content-center trip-details">
                        <p class="trip-description">{{ trip.tiny_description }}</p>
                    </div>
                    <div class="d-flex justify-content-between trip-details">
                        <div class="trip-price">Rs. {{ trip.cost }}</div>
                    </div>
                    <div v-if="trip.event_date" class="d-flex trip-details">
                        <i class="fas fa-calendar-day"></i> <p class="trip-date">{{ trip.event_date }}</p>
                    </div>

                    <router-link :to="'/trip/' + trip.slug" class="btn btn-default trip-btn">More..</router-link>

                </div>
            </div> 
        </div>
    </div>

</template>

<script>
    export default {
        data () {
            return {
                DomainName: window.DomainName
            }
        },
        props: ['trip']
    }
</script>

<style scoped>

    .svgSwag {
        height: 35px;
        fill: #fff;
    }

    .trip-item {
        margin: 0 0 20px 0;
    }
    
    .tripImage {
        width: 100%;
    }

    .trip-card {
        overflow: hidden;
        margin: 10px;
        position: relative;
    }

    .trip-info {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #0009;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: left;
        color: #fff;
        padding: 0 15px;
    }

    .trip-name {
        font-weight: 500;
        text-transform: uppercase;
    }

    .trip-price {
        font-weight: 500;
    }

    .trip-details {
        padding: 10px;
    }

    .trip-details p {
        margin-bottom: 2px;
    }

    .trip-description {
        font-weight: 300;
        font-size: 13px;
        color: #fff;
    }

    .trip-date {
        font-weight: 400;
        font-size: 15px;
        padding: 0 10px;
        color: #fff;
    }

    svg {
        font-size: 22px;
    }

</style>
