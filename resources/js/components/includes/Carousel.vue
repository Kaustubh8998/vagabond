<template>
    <div>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <a data-toggle="modal" data-target="#image-lightbox" class="switch-to-full"><img :src="DomainName + '/svg/switch-to-full-screen-button.svg'" alt=""></a>
            <div class="carousel-inner">
                <div v-for="(image, index) in images" v-bind:key="image.id" :class="['carousel-item', (index === 0 ? 'active' : '')]">
                    <img class="d-block w-100" :src="image.image != '' ? DomainName + image.image : DomainName + '/img/landing.png'" alt="">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="modal fade" id="image-lightbox" tabindex="-1" role="dialog" aria-labelledby="image-lightbox" aria-hidden="true">
            <div class="modal-holder">
                <div class="modal-dialog my-modal" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="image-lightbox-carousel" class="carousel slide" data-ride="carousel">
                                <a data-dismiss="modal" class="switch-to-full"><img :src="DomainName + '/svg/full-screen-exit.svg'" alt=""></a>
                                <div class="carousel-inner">
                                    <div v-for="(image, index) in images" v-bind:key="image.id" :class="['carousel-item', (index === 0 ? 'active' : '')]">
                                        <img class="d-block w-100" :src="image.image != '' ? DomainName + image.image : DomainName + '/img/landing.png'" alt="">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#image-lightbox-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#image-lightbox-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
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
        props: ['images']
    }
</script>

<style scoped>

    .carousel .switch-to-full{
        position: absolute;
        z-index: 10;
        right: 10px;
        top: 10px;
        cursor: pointer;
    }

    .carousel .switch-to-full img{
        width: 35px;
    }

    .modal-holder {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #000c;
    }

    .my-modal {
        width: 100%;
        padding: 0;
        margin: 0;
        max-width: 90%;
    }

</style>
