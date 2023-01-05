<template>
    <v-col
        v-for="category in categories"
        :key="category.id"
        cols="4"
        >
        <v-card height="350">
            <v-img
              :src="category.image"
              class="align-end"
              gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
              height="300px"
              cover
            >
              <v-card-title class="text-white" v-text="category.name"></v-card-title>
            </v-img>

            <v-card-actions>
              <v-spacer></v-spacer>

              <v-btn size="small" color="surface-variant" variant="text" icon="mdi-heart"></v-btn>

              <v-btn size="small" color="surface-variant" variant="text" icon="mdi-bookmark"></v-btn>

              <v-btn size="small" color="surface-variant" variant="text" icon="mdi-share-variant"></v-btn>
            </v-card-actions>
        </v-card>
    </v-col>
</template>

<script>
import ProductApi from '../../api/ProductApi.js';
export default {
    data () {
        return {
            products : {},
            categories : {},
        }
    },
    mounted () {
        ProductApi.getCategories()
            .then(response => {
                this.categories = response.data
                // this.products = response.data;
                console.log(this.categories)
            })
    }

}
</script>