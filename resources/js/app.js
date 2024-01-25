// Importa il file 'bootstrap.js', che può includere vari setup iniziali, 
// come l'importazione di librerie o configurazioni globali.
import './bootstrap';

// Importa i tuoi stili CSS principali dal file 'app.css'.
import '../css/app.css';

// Importa la funzione 'createApp' da Vue, che è utilizzata per creare un'istanza dell'app Vue.
import { createApp } from 'vue';

// Importa la funzione 'createVuetify' dal pacchetto 'vuetify'. Questa funzione è utilizzata per 
// creare un'istanza di Vuetify che verrà poi applicata all'app Vue.
import { createVuetify } from 'vuetify';

// Importa i fogli di stile di Vuetify. Questi stili sono necessari per applicare lo stile 
// predefinito dei componenti Vuetify.
import 'vuetify/dist/vuetify.min.css';

// Importa il componente root 'App.vue'. Questo componente è il punto di partenza della tua app Vue 
// e solitamente contiene l'interfaccia utente principale.
import App from './components/App.vue'; 

import router from './router'; // Importa il router
import store from './store'; // Importa lo store Vuex

import Home from './components/Home.vue'


// Crea un'istanza dell'app Vue utilizzando la funzione 'createApp' e passando il componente root 'App'.
const app = createApp(App);

// Crea un'istanza di Vuetify utilizzando la funzione 'createVuetify'.
const vuetify = createVuetify(); 

// Applica l'istanza di Vuetify all'app Vue. Questo rende Vuetify disponibile in tutta l'applicazione.
app.use(vuetify);

app.use(router); // Usa Vue Router
app.use(store); // Usa Vuex

// Monta l'app Vue all'elemento del DOM con l'ID 'app'. Questo è il punto in cui Vue prende il controllo
// e inizia a renderizzare l'applicazione all'interno del browser.
app.mount('#app');

