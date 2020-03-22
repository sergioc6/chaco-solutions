import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';

import Routes from './routes';

import App from './views/App'

Vue.use(Vuetify);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: Routes,
    vuetify: new Vuetify(),
    render: h => h(App),
});

export default app;
