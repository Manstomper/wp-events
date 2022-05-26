import { createApp } from 'vue';
import App from './app.vue';

const app = createApp(App);

app.config.errorHandler = (err) => {
  console.error(err);
};

app.mount('[data-app="events"]');
