import { createRouter, createWebHistory } from 'vue-router';
import Home from './components/Home.vue'; // Assicurati che questo componente esista

const routes = [
    { path: '/', component: Home }
    // Aggiungi altre rotte qui
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
