import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from "./components/Home";
import Jobs from "./components/Jobs";
import Providers from "./components/Providers";
import Clients from "./components/Clients";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            name: 'home',
            path: '/home',
            component: Home
        },
        {
            name: 'jobs',
            path: '/jobs',
            component: Jobs
        },
        {
            name: 'clients',
            path: '/clients',
            component: Clients
        },
        {
            name: 'providers',
            path: '/providers',
            component: Providers
        }
    ]
});

export default router;
