<template>
    <h1 v-if="event">{{ event.title }}</h1>
    <div class="navbar" v-if="event">
        <router-link :to="{ name: 'EventDetails', params: { id: event.id } }"
            >Details</router-link
        >
        |
        <router-link :to="{ name: 'EventRegister', params: { id: event.id } }"
            >Register</router-link
        >
        |
        <router-link :to="{ name: 'EventEdit', params: { id: event.id } }"
            >Edit</router-link
        >
    </div>
    <router-view :event="event"></router-view>
</template>

<script>
import EventService from '@/services/EventService.js';
export default {
    name: 'LayoutEvent',
    props: ['id'],
    data() {
        return {
            event: null,
        };
    },
    created() {
        EventService.getEvent(this.id)
            .then((result) => {
                this.event = result.data;
            })
            .catch(() => {
                this.$route.push({ name: 'PageNotFound' });
            });
    },
};
</script>
<style scoped>
a {
    padding: 10px 5px;
    margin: 4px;
    text-decoration: none;
}
</style>
