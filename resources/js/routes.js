import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/Home.vue';
import CategoryProfile from './components/CategoryProfile.vue';
import TripProfile from './components/TripProfile.vue';
import Trips from './components/Trips.vue';

Vue.use(VueRouter);

let routes = [
	{ path: '/', component: Home },
	{ path: '/category/:slug', component: CategoryProfile },
  	{ path: '/trip/:slug', component: TripProfile, props: true  },
  	{ path: '/trips', component: Trips, props: true  }
]

const router = new VueRouter({
	mode: "history",
 	routes // short for `routes: routes`
})

export default router;