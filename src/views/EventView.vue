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
import { watchEffect } from '@vue/runtime-core';
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
    created() {
        watchEffect(() => {
            PostService.getEvents(2, this._page)
                .then((response) => {
                    this.events = response.data;
                    this.totalEvents = response.headers['x-total-count'];
                    console.log(this.totalEvents);
                })
                .catch((error) => {
                    console.log(error);
                });
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
