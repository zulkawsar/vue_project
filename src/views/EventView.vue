<template>
    <div>Event</div>
    <event-component />
</template>
<script>
import eventComponent from '../components/EventComponent.vue'
export default {
    components: {
        'event-component': eventComponent,
    },
}
</script>
