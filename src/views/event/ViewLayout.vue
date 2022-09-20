<template>
    <h1 v-if="GStore.event">{{ GStore.event.title }}</h1>
    <div class="navbar" v-if="GStore.event">
        <router-link
            :to="{ name: 'EventDetails', params: { id: GStore.event.id } }"
            >Details</router-link
        >
        |
        <router-link
            :to="{ name: 'EventRegister', params: { id: GStore.event.id } }"
            >Register</router-link
        >
        |
        <router-link
            :to="{ name: 'EventEdit', params: { id: GStore.event.id } }"
            >Edit</router-link
        >
    </div>
    <router-view :event="GStore.event"></router-view>
</template>

<script>
export default {
    name: 'LayoutEvent',
    inject: ['GStore'],
};
</script>
<style scoped>
a {
    padding: 10px 5px;
    margin: 4px;
    text-decoration: none;
}
</style>
