import {createRouter, createWebHistory} from 'vue-router'
import nestedPath from "@/assets/json/nestedPath.json"
import Home from "@/views/Home.vue";
import Services from "@/views/Services.vue";
import Sites from "@/views/Sites.vue";
import Donations from "@/views/Donations.vue";

export const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: `${nestedPath.path}`,
            name: 'home',
            component: Home
        },
        {
            path: `${nestedPath.path}services`,
            name: 'services',
            component: Services
        },
        {
            path: `${nestedPath.path}sites`,
            name: 'sites',
            component: Sites
        },
        {
            path: `${nestedPath.path}donations`,
            name: 'donations',
            component: Donations
        }
    ]
})
