import './bootstrap';

import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";

// --- axios & App Storage ---
import axios from 'axios';
window.axios = axios;
import AppStorage from './Helpers/AppStorage';

// globally set token using Interceptors
axios.interceptors.request.use(function (config) {
  const token = AppStorage.getToken();
  
  config.headers['Accept'] = 'application/json'; 
  
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
}, function (error) {
  return Promise.reject(error);
});

// import notification class
import Notification from '@/Helpers/Notification';
window.Notification = Notification;

// --- sweetalert2 ---
import Swal from 'sweetalert2';
window.Swal = Swal;
const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  },
});
window.Toast = Toast;

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