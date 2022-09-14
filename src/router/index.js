import { createRouter, createWebHistory } from 'vue-router';
import EventView from '@/views/EventView.vue';
import EventDetails from '@/views/event/ViewDetails.vue';
import EventRegister from '@/views/event/ViewRegister.vue';
import EventEdit from '@/views/event/ViewEdit.vue';
import EventLayout from '@/views/event/ViewLayout.vue';
import NotFound from '@/views/event/ViewNotFoundError.vue';

const routes = [
    {
        path: '/',
        name: 'event',
        props: (route) => ({ _page: parseInt(route.query.page) || 1 }),
        component: EventView,
    },
    {
        path: '/event/:id',
        name: 'EventLayout',
        props: true,
        component: EventLayout,
        children: [
            {
                path: '',
                name: 'EventDetails',
                component: EventDetails,
            },
            {
                path: 'register',
                name: 'EventRegister',
                component: EventRegister,
            },
            {
                path: 'edit',
                name: 'EventEdit',
                component: EventEdit,
            },
        ],
    },
    {
        path: '/:catchAll(.*)',
        name: 'PageNotFound',
        component: NotFound,
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
