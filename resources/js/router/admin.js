import AdminLayout from '../layouts/AdminLayout.vue';



export default [
    {
        path: '/admin',
        component: AdminLayout,
        children: [
            { path: '', name: 'adminDashboard', component: () => import('../backEnd/AdminDashboard.vue') },
            { path: 'news', name: 'adminNews', component: () => import('../backEnd/page/newsManagement/NewsManagement.vue') },
            { path: 'news/create', name: 'adminCreateNews', component: () => import('../backEnd/page/newsManagement/NewsCreate.vue') },
            { path: 'news/:id/edit', name: 'adminEditNews', component: () => import('../backEnd/page/newsManagement/NewsEdit.vue') },
            { path: 'news/:id/show', name: 'adminShowNews', component: () => import('../backEnd/page/newsManagement/NewsShow.vue') },
            { path: 'categories', name: 'adminCategories', component: () => import('../backEnd/page/category/IndexCategory.vue') },
            { path: 'categories/create', name: 'adminCreateCategory', component: () => import('../backEnd/page/category/CreateCategory.vue') },
            { path: 'categories/:id/edit', name: 'adminEditCategory', component: () => import('../backEnd/page/category/EditCategory.vue') },
            { path: 'users', name: 'adminUsers', component: () => import('../backEnd/page/user/UserIndex.vue') },
        ]
    }
]