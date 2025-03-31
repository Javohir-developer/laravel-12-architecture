import { createRouter, createWebHistory } from 'vue-router';
import Home from '@/backend/home/home.vue';
import About from '@/backend/home/about.vue';
import NotFound from '@/backend/home/not-found.vue';
import Movies from '@/backend/movies/movies.vue';

const routes = [

    // home
    { path: '/', component: Home, name: 'home' },
    { path: '/about', component: About, name: 'about' },

    // any path
    { path: '/:pathMatch(.*)*', component: NotFound, name: 'not-found' },

    // movies
    { path: '/movies', component: Movies, name: 'movies' },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
