import './bootstrap';

import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";

// --- Swiper Global CSS ---
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

// --- Swiper Global Components ---
import { Swiper, SwiperSlide } from 'swiper/vue';

const app = createApp(App);

// Component গ্লোবালি রেজিস্টার করা 
app.component('Swiper', Swiper);
app.component('SwiperSlide', SwiperSlide);

app.use(router);
app.mount('#app');