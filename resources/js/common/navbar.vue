<template>
    
    <v-menu
        open-on-hover
        v-for="link in links"
        :key="link.id"
        >
      <template v-slot:activator="{ props }">
        <v-btn
          color="primary"
          v-bind="props"
        >
          {{ link.name }}
        </v-btn>
      </template>

      <v-list v-if="Object.keys(link.child).length > 0">
        <v-list-item
          v-for="subCategory in link.child"
          :key="subCategory.id"
        >
          <v-list-item-title>{{ subCategory.name }}</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
</template>

<script>
import Api from '@/api/Api.js'
export default {
    data: () => ({
        links: {},
    }),
    created () {
        Api.getCategories()
            .then(res => {
                this.links = res.data.data
                console.log(res)
            })
    },
    computed () {

    }
}
</script>