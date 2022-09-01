import { createRouter, createWebHistory } from 'vue-router';
import EventView from '../views/EventView.vue';
/* eslint-disable */
const routes = [
    {
        path: '/',
        name: 'event',
        component: EventView,
    },
    {
        path: '/about',
        name: 'about',
        // route level code-splitting
        // this generates a separante chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import(/* webpackChunkName: "about" */ '../views/AboutView.vue'),
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
