import AdminLayout from '../layouts/AdminLayout.vue';



export default [
    {
        path: '/admin',
        component: AdminLayout,
        children: [
            { path: '', name: 'adminDashboard', component: () => import('../backEnd/AdminDashboard.vue') },
        ]
    }
]