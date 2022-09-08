<template>
    <div v-if="event" class="event-class">
        <div class="event-info">
            <p>{{ event.body }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ViewDetails',
    props: ['event'],
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
