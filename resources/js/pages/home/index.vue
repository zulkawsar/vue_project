<template>
    <v-col
        v-for="product in products"
        :key="product.id"
        cols="4"
        >
        <v-card height="350">
            <v-img
              src="#"
              class="align-end"
              gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
              height="300px"
              cover
            >
              <v-card-title class="text-white" v-text="product.name"></v-card-title>
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
import Api from '../../api/Api.js';
export default {
    data () {
        return {
            products : {},
            categories : {},
        }
    },
    mounted () {
        Api.getProducts()
            .then(response => {
                this.products = response.data.data
            })
    }

}
</script>