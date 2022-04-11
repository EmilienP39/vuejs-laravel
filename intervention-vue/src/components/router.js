import {createRouter, createWebHistory} from 'vue-router'

const routes = [
    {
        path: "/",
        alias :"/accueil",
        name :'accueil',
        component:() => import('./Accueil.vue')
    },{
        path: "/CRM",
        alias: "/CRM",
        name: "CRM",
        component:() => import('./CRM.vue')
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router



