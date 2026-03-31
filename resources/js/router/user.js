import UserLayout from '../layouts/UserLayout.vue';
import index from '../frontEnd/index.vue';



export default [
    {
        path: '/',
        component: UserLayout,
        children: [
            { path: '', name: 'index', component: index }
        ]
    }
]