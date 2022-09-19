<template>
    <div>
        <h1>Register</h1>
        <button @click="register">Register Me</button>
    </div>
</template>
<script>
export default {
    props: ['event'],
    inject: ['GStore'],
    methods: {
        register() {
            this.GStore.flashMessage = 'Successfully Register';
            setTimeout(() => {
                this.GStore.flashMessage = '';
            }, 3600);
            this.$router.push({
                name: 'EventDetails',
                params: { id: this.event.id },
            });
        },
    },
};
</script>
