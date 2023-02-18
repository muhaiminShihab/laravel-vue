import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'login',
            component: () => import('../views/Login.vue'),
        },
        {
            path: '/registration',
            name: 'registration',
            component: () => import('../views/Registration.vue'),
        },
        {
            path: '/reset-password',
            name: 'resetPassword',
            component: () => import('../views/ResetPassword.vue'),
        },
        {
            path: '/new-password',
            name: 'newPassword',
            component: () => import('../views/NewPassword.vue'),
        },

    ]
})

export default router
