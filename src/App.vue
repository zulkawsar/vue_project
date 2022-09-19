<template>
    <div class="flash" v-if="GStore.flashMessage">
        {{ GStore.flashMessage }}
    </div>
    <nav>
        <router-link to="/">Event</router-link> |
        <router-link to="/about">About</router-link>
    </nav>
    <router-view />
</template>

<script>
export default {
    inject: ['GStore'],
};
</script>
<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
}
.flash {
    background: #42b983;
}
nav {
    padding: 30px;
}

nav a {
    font-weight: bold;
    color: #2c3e50;
}

nav a.router-link-exact-active {
    color: #42b983;
}
</style>
