import { createApp, reactive } from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';

const GStore = reactive({ flashMessage: '', type: '' });

createApp(App).use(router).use(store).provide('GStore', GStore).mount('#app');
