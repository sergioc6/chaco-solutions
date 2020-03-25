import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';

import Routes from './routes';

import App from './views/App'
import ClientsList from "./components/Clients/ClientsList";
import ClientsHeader from "./components/Clients/ClientsHeader";
import ProvidersHeader from "./components/Providers/ProvidersHeader";
import ProvidersList from "./components/Providers/ProvidersList";
import ProvidersActions from "./components/Providers/ProvidersActions";
import ClientsActions from "./components/Clients/ClientsActions";
import ClientsForm from "./components/Clients/ClientsForm";

Vue.use(Vuetify);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('clients-header', ClientsHeader);
Vue.component('clients-form', ClientsForm);
Vue.component('clients-actions', ClientsActions);
Vue.component('clients-list', ClientsList);
Vue.component('providers-header', ProvidersHeader);
Vue.component('providers-actions',ProvidersActions);
Vue.component('providers-list', ProvidersList);

const app = new Vue({
    el: '#app',
    router: Routes,
    vuetify: new Vuetify(),
    render: h => h(App),
});

export default app;
