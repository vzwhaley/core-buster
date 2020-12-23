import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import Rentals from './components/Rentals.vue';

const routes = [
    {
        name: 'Rentals',
        path: '/',
        component: Rentals
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, Rentals)).$mount('#rentals');
