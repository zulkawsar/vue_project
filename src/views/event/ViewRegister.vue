<template>
    <div>
        <h1>Register</h1>
        <button @click="register">Register Me</button>
    </div>
</template>
<script>
export default {
    props: ['event'],
    methods: {
        register() {
            this.$router.push({
                name: 'EventDetails',
                params: { id: this.event.id },
            });
        },
    },
};
</script>
