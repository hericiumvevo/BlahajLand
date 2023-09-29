import {createRouter, createWebHistory} from 'vue-router'
import nestedPath from "@/assets/json/nestedPath.json"

export const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: `${nestedPath.path}`,
            name: 'home',
        },
        {
            path: `${nestedPath.path}services`,
            name: 'services',
        },
        {
            path: `${nestedPath.path}sites`,
            name: 'sites',
        },
        {
            path: `${nestedPath.path}donations`,
            name: 'donations',
        }
    ]
})
