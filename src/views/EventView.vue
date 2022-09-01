<template>
    <event-component v-for="event in events" :event="event" :key="event.id" />
</template>

<script>
import eventComponent from '../components/EventComponent.vue';
import axios from 'axios';
export default {
    data() {
        return {
            events: [],
        };
    },
    components: {
        'event-component': eventComponent,
    },
    async mounted() {
        let result = await axios.get(
            'https://jsonplaceholder.typicode.com/posts',
        );
        this.events = result.data;
    },
};
</script>
