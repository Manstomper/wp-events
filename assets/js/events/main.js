import { createApp } from 'vue';
import App from './app.vue';

const app = createApp(App);

app.config.errorHandler = (err) => {
  console.error(err);
};

app.provide('i18n', window.i18n);
app.mount('[data-app="events"]');
