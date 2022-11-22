import './bootstrap';

import Vue from 'vue'
import Vuetify from "vuetify";
Vue.use(Vuetify);

import master from './components/master.vue';

new Vue({
  vuetify: new Vuetify(),
  render: h => h(master)
}).$mount('#test');