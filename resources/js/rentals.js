console.log('test4709');
import Vue from "vue";

import moment from "moment";
import VueRouter from "vue-router";
import { EventBus } from "./event-bus.js";
import VTooltip from "v-tooltip";
import VModal from "vue-js-modal";

Vue.use(require("vue-moment"));
Vue.use(VueRouter);
Vue.use(VTooltip);
Vue.use(VModal);

const Rentals = Vue.component('rentals', require('./components/Rentals.vue'));

const routes = [
    { path: "/", component: Rentals, props: true },
];

const router = new VueRouter({
    routes // short for `routes: routes`
});

const app = new Vue({
    name: "Rentals",
    components: {},
    router,
}).$mount("#rentals");
