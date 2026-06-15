import AdminLayout from '../layouts/AdminLayout.vue';



export default [
    {
        path: '/admin',
        component: AdminLayout,
        children: [
            { path: '', name: 'adminDashboard', component: () => import('../backEnd/AdminDashboard.vue') },
            { path: 'news', name: 'adminNews', component: () => import('../backEnd/page/newsManagement/NewsManagement.vue') },
            { path: 'categories', name: 'adminCategories', component: () => import('../backEnd/page/category/IndexCategory.vue') },
            { path: 'categories/create', name: 'adminCreateCategory', component: () => import('../backEnd/page/category/CreateCategory.vue') },
            { path: 'categories/:id/edit', name: 'adminEditCategory', component: () => import('../backEnd/page/category/EditCategory.vue') }
        ]
    }
]