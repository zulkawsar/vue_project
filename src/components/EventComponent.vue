<!-- eslint-disable prettier/prettier -->
<template>
    <div class="event-class">
        <ul>
            <li v-for="evd in kawsar" :key="evd.id">{{evd.title}}</li>
        </ul>
    </div>
    
</template>

<script>
export default {
    data() {
        return {
            kawsar: [
                {
                    id: 1,
                    title: 'New list',
                },
            ],
        }
    },
}
</script>

<style scoped>
.event-class {
    border: 1px solid;
    display: block;
    position: relative;
}
</style>
