import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { createVuePlugin } from 'vite-plugin-vue2'
import { VuetifyResolver } from 'unplugin-vue-components/resolvers';
import Components from 'unplugin-vue-components/vite';
 
export default defineConfig({
    plugins: [
        laravel(['resources/js/app.js']),
        createVuePlugin({
            template: {
                transformAssetUrls: {
                    // The Vue plugin will re-write asset URLs, when referenced
                    // in Single File Components, to point to the Laravel web
                    // server. Setting this to `null` allows the Laravel plugin
                    // to instead re-write asset URLs to point to the Vite
                    // server instead.
                    base: null,
 
                    // The Vue plugin will parse absolute URLs and treat them
                    // as absolute paths to files on disk. Setting this to
                    // `false` will leave absolute URLs un-touched so they can
                    // reference assets in the public directory as expected.
                    includeAbsolute: false,
                },
            },
        }),
        Components({
            resolvers: [
              // Vuetify
              VuetifyResolver(),
            ],
          }),
    ],
});