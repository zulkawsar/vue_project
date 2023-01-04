<template>
  <v-app id="inspire">
    <v-app-bar flat>
      <v-container class="fill-height d-flex align-center">
        <v-avatar
          class="mr-10 ml-4"
          color="grey-darken-1"
          size="32"
        ></v-avatar>

        <v-btn
          v-for="link in links"
          :key="link"
          variant="text"
        >
          {{ link }}
        </v-btn>

        <v-spacer></v-spacer>

        <v-responsive max-width="260">
          <v-text-field
            density="compact"
            hide-details
            variant="solo"
          ></v-text-field>
        </v-responsive>
      </v-container>
    </v-app-bar>

    <v-main class="bg-grey-lighten-3">
      <v-container>
        <v-row>
          <products />
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
  import ProductPage from '@/pages/home/index.vue' 
  export default {
    data: () => ({
      links: [
        'Dashboard',
        'Messages',
        'Profile',
      ],
    }),
    components: {
      products: ProductPage
    },
    mounted() {
      console.log('mouted')
    },
  }
</script>
