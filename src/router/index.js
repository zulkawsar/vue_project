import { createRouter, createWebHistory } from 'vue-router';
import EventView from '@/views/EventView.vue';
import EventDetails from '@/views/event/ViewDetails.vue';
import EventRegister from '@/views/event/ViewRegister.vue';
import EventEdit from '@/views/event/ViewEdit.vue';
import EventLayout from '@/views/event/ViewLayout.vue';
import NotFound from '@/views/event/ViewNotFoundError.vue';
import EventService from '@/services/EventService.js';
import Register from '@/views/SampleForm.vue';
import NProgress from 'nprogress';
import GStore from '@/store';

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
        beforeEnter: (to) => {
            return EventService.getEvent(to.params.id)
                .then((result) => {
                    GStore.event = result.data;
                })
                .catch((error) => {
                    console.log(error);
                    return { name: 'PageNotFound' };
                });
        },
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
    {
        path: '/register',
        name: 'Register',
        component: Register,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        } else {
            return { top: 0 };
        }
    },
});

router.beforeEach(() => {
    // to and from are both route objects. must call `next`.
    NProgress.start();
});

router.afterEach(() => {
    // to and from are both route objects. must call `next`.
    NProgress.done();
});
export default router;
