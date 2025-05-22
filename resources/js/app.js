import { createApp } from 'vue';
import App from './views/App.vue';
import vue3GoogleLogin from 'vue3-google-login';

const app = createApp(App);
app.use(vue3GoogleLogin, {
    clientId: import.meta.env.VITE_GOOGLE_CLIENT_ID,
});
app.mount('#app');
