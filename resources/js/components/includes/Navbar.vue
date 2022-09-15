<template>

    <nav class="navbar sticky-top navbar-light navbar-expand-md bg-light justify-content-center">
        <a href="#" class="navbar-brand d-flex w-50 mr-auto">
            <router-link to="/"><img class="mb-2" :src="DomainName + 'img/vagalogo.png'" alt="" height="35"></router-link>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="navbar">
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item active">
                    <router-link class="nav-link" to="/">Home <span class="sr-only">(current)</span></router-link>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Experiences
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <router-link class="dropdown-item" v-for="category in categories" v-bind:key="category.id" :to="'/category/' + category.slug">{{ category.name }}</router-link>
                    </div>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/event">Corporate</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/trips">Trips</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/event">About Us</router-link>
                </li>
            </ul>
        </div>
    </nav>

</template>

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
