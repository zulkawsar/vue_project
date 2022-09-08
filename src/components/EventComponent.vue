<!-- eslint-disable prettier/prettier -->
<template>
    <router-link :to="{ name: 'EventDetails', params: { id: event.id } }">
        <div class="event-class">
            <div class="event-info">
                <h4>{{ event.title }}</h4>
                <hr />
                <p>{{ event.body }}</p>
            </div>
        </div>
    </router-link>
</template>

<script>
export default {
    name: 'EventCard',
    props: {
        event: Object,
        _page: Number,
    },
};
</script>

<style scoped>
.event-class {
    display: flex;
    width: 500px;
    height: 200px;
    border: 1px solid #000;
    margin: 10px auto;
}
.event-info {
    text-align: left;
    padding: 5px;
}
.event-info h4 {
    text-transform: capitalize;
}
.event-info p {
    text-align: justify;
}
</style>
