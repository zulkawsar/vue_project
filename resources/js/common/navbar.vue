<template>
    <v-btn
        v-for="link in links"
        :key="link"
        variant="text"
    >
        {{ link }}
    </v-btn>
</template>

<script>
import Api from '@/api/Api.js'
export default {
    data: () => ({
        links: [
            'Dashboard',
            'dd',
            'Profile',
        ],
    }),
    created () {
        Api.getCategories()
            .then(res => {
                console.log(res)
            })
    }
}
</script>