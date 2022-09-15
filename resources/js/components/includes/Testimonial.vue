<template>
    <div class="testmonials">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div v-for="(testimonial, index) in testimonials" v-bind:key="testimonial.id" :class="['carousel-item', (index === 0 ? 'active' : '')]">
                    <div class="testmonial-holder">
                        <img :src="testimonial.image != '' ? testimonial.image : 'https://via.placeholder.com/80'" alt="">
                        <i>
                            <span>"</span>
                            {{ testimonial.text }}
                            <span>"</span>
                        </i>
                        <h4>- {{ testimonial.name }}</h4>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>    
</template>

<style scoped>
    .testmonial-holder {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px 17% 45px;
        text-align: center;
        font-size: 22px;
        line-height: 35px;
        flex-direction: column;
        height: 400px;
        width: 100%;
    }

    .testmonial-holder span{
        font-size: 28px;
    }

    .testmonial-holder img {
        border-radius: 50%;
        margin-bottom: 10px;
        height: 80px;
        width: 80px;
    }

    .testmonial-holder h4 {
        margin: 20px 10px 10px;
        font-size: 18px;
    }
    
    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%234e3a23' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%234e3a23' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .carousel-indicators li {
        background-color: #4e3a23;
    }

    .testmonials {
        padding-bottom: 30px;
        width: 100%;
    }

</style>


<script>
    export default {
        data () {
            return {
                DomainName: window.DomainName
            }
        },
        props: ['testimonials']
    }
</script>

