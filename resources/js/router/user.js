import UserLayout from '../layouts/UserLayout.vue';
import index from '../frontEnd/index.vue';
import NewsDetails from '../frontEnd/page/NewsDetails.vue';



export default [
    {
        path: '/',
        component: UserLayout,
        children: [
            { path: '', name: 'home', component: index },
            { path: 'news', name: 'newsDetails', component: NewsDetails },
        ]
    }
]