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
            { path: 'sub-categories', name: 'adminSubCategories', component: () => import('../backEnd/page/subCategory/SubCategoryIndex.vue') },
            { path: 'sub-categories/create', name: 'adminCreateSubCategory', component: () => import('../backEnd/page/subCategory/SubCategoryCreate.vue') },
            { path: 'sub-categories/:id/edit', name: 'adminEditSubCategory', component: () => import('../backEnd/page/subCategory/SubCategoryEdit.vue') },
            { path: 'tags', name: 'adminTags', component: () => import('../backEnd/page/tags/TagsIndex.vue') },
            { path: 'photo-gallery', name: 'adminPhotoGallery', component: () => import('../backEnd/page/gallery/photoGallery/PhotoGalleryIndex.vue') },
            { path: 'photo-gallery/upload', name: 'adminPhotoUpload', component: () => import('../backEnd/page/gallery/photoGallery/PhotoUpload.vue') },
            { path: 'video-gallery', name: 'adminVideoGallery', component: () => import('../backEnd/page/gallery/videoGallery/VideoCreate.vue') },
            { path: 'comments', name: 'adminComments', component: () => import('../backEnd/page/comments/CommentIndex.vue') },
            { path: 'messages', name: 'adminMessages', component: () => import('../backEnd/page/messages/MessageIndex.vue')},
            { path: 'messages/:id/show', name: 'adminShowMessage', component: () => import('../backEnd/page/messages/MessageShow.vue')},
            { path: 'advertisements', name: 'adminAdvertisements', component: () => import('../backEnd/page/ads/AdIndex.vue') },
            { path: 'advertisements/create', name: 'adminCreateAdvertisement', component: () => import('../backEnd/page/ads/AdCreate.vue') },
            { path: 'advertisements/:id/edit', name: 'adminEditAdvertisement', component: () => import('../backEnd/page/ads/AdEdit.vue') },
            { path: 'polls', name: 'adminPolls', component: () => import('../backEnd/page/poll/PollIndex.vue') },
            { path: 'polls/create', name: 'adminCreatePoll', component: () => import('../backEnd/page/poll/PollCreate.vue') },
            { path: 'polls/:id/edit', name: 'adminEditPoll', component: () => import('../backEnd/page/poll/PollEdit.vue') },
            { path: 'users', name: 'adminUsers', component: () => import('../backEnd/page/user/UserIndex.vue') },
            { path: 'users/:id/edit', name: 'adminEditUser', component: () => import('../backEnd/page/user/UserEdit.vue') },
            { path: 'users/:id/reset-password', name: 'adminResetPassword', component: () => import('../backEnd/auth/UserPasswordReset.vue') },
            { path: 'settings', name: 'adminSettings', component: () => import('../backEnd/page/generalSettings/SettingsIndex.vue') },
        ]
    }
]