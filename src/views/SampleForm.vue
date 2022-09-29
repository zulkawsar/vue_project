<template>
    <h2>Register form</h2>
    <form action="">
        <label>Select a category</label>
        <select name="" id="">
            <option
                v-for="category in categories"
                :value="category"
                :key="category"
            >
                {{ category }}
            </option>
        </select>

        <BaseInput label="Title" v-model="event.title" type="text" />

        <BaseInput label="Description" v-model="event.descibtion" type="text" />

        <BaseInput label="Location" v-model="event.location" type="text" />
    </form>
</template>

<script>
import BaseInput from '@/components/FormComponent.vue';
export default {
    data() {
        return {
            categories: ['sustainablelity', 'nature', 'housing'],
            event: {
                category: '',
                title: '',
                descibtion: '',
                location: '',
                pets: 1,
                extras: {
                    catering: false,
                    music: false,
                },
            },
        };
    },
    components: {
        BaseInput: BaseInput,
    },
};
</script>
<style>
form {
    display: block;
    width: 300px;
    margin: 0 auto;
}
label {
    display: block;
    text-align: left;
    margin: 5px 3px;
    font-weight: 800;
}
select {
    text-align: left;
    display: block;
    padding: 10px;
    width: 100%;
}
input.form-field {
    text-align: left;
    display: block;
    padding: 10px;
    width: 92%;
}
</style>
