<template>
    <div class="footer">
        <div class="container">
            <footer class="pt-4 my-md-5 pt-md-5">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" :src="DomainName + 'img/vagalogo.png'" alt="" height="45">
                        <small class="d-block mb-3 text-muted">© 2017-2019</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Experiences</h5>
                        <ul class="list-unstyled text-small">
                            <li v-for="category in categories" v-bind:key="category.id">
                                <router-link :to="'/category/' + category.id">{{ category.name }}</router-link>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Resource</a></li>
                        <li><a class="text-muted" href="#">Resource name</a></li>
                        <li><a class="text-muted" href="#">Another resource</a></li>
                        <li><a class="text-muted" href="#">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>

<style scoped>
    .footer {
        background: #fff;
        padding-top: 20px;
    }
</style>


<script>

    export default {
        data () {
            return {
                categories: null,
                DomainName: window.DomainName,
            }
        },
        mounted() {
            axios.get('/api/categories-list')
                 .then(response => (this.categories = response.data.categories))
        }
    }

</script>
