<template>
    <event-component v-for="event in events" :event="event" :key="event.id" />

    <router-link
        :to="{ name: 'event', query: { page: _page - 1 } }"
        v-if="_page != 1"
    >
        Previous
    </router-link>

    <router-link
        :to="{ name: 'event', query: { page: _page + 1 } }"
        v-if="isNextItem"
    >
        Next
    </router-link>
</template>

<script>
import eventComponent from '../components/EventComponent.vue';
import PostService from '@/services/EventService.js';
export default {
    props: ['_page'],
    data() {
        return {
            events: null,
            totalEvents: 0,
        };
    },
    components: {
        'event-component': eventComponent,
    },
    beforeRouteEnter(routeTo, routeFrom, next) {
        PostService.getEvents(2, parseInt(routeTo.query.page) || 1)
            .then((response) => {
                next((comp) => {
                    comp.events = response.data;
                    comp.totalEvents = response.headers['x-total-count'];
                });
            })
            .catch((error) => {
                console.log(error);
            });
    },
    beforeRouteUpdate(routeTo) {
        PostService.getEvents(2, parseInt(routeTo.query.page) || 1)
            .then((response) => {
                this.events = response.data;
                this.totalEvents = response.headers['x-total-count'];
            })
            .catch((error) => {
                console.log(error);
            });
    },
    computed: {
        isNextItem() {
            var totalPage = Math.ceil(this.totalEvents / 2);
            console.log(totalPage);
            return this._page < totalPage;
        },
    },
};
</script>
