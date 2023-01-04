import { createApp } from 'vue'
import vuetify from './plugins/vuetify'

import Master from './layouts/master.vue';

createApp(Master).use(vuetify).mount('#test')