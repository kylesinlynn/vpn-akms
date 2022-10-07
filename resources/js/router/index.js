import { useRoute, createRouter, createWebHistory } from 'vue-router';
import Home from '../pages/Home.vue'

const allRoutes = [
    {
        name: 'Home',
        path: '/',
        component: Home
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: allRoutes,
})

export default router
