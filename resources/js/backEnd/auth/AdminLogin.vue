<template>
    <!-- ১. মেইন কন্টেইনার (পুরো স্ক্রিন জুড়ে ছাই রঙের ব্যাকগ্রাউন্ড) -->
    <div class="min-h-screen flex items-center justify-center bg-[#f2f2f2] p-4 font-sans">

        <!-- ২. লগইন কার্ড -->
        <div
            class="max-w-md w-full bg-white rounded-[2.5rem] shadow-2xl shadow-blue-900/10 border border-gray-100 overflow-hidden">

            <!-- ওপরে একটি ডেকোরেটিভ বার (আপনার ব্র্যান্ড কালার) -->
            <div class="h-2 bg-[#003557] w-full"></div>

            <div class="p-8 md:p-10">
                <!-- ৩. লোগো ও শিরোনাম -->
                <div class="text-center mb-10">
                    <img src="../../../../public/uploads/logo/logo.png" class="h-12 mx-auto mb-4 object-contain"
                        alt="Logo">
                    <h2 class="text-2xl font-black text-gray-800 tracking-tight">অ্যাডমিন লগইন</h2>
                    <p class="text-sm text-gray-400 mt-2 font-medium italic">আপনার প্যানেলে প্রবেশ করতে তথ্য দিন</p>
                </div>

                <form @submit.prevent="login" class="space-y-6">

                    <!-- ৪. ইমেইল ইনপুট -->
                    <div class="space-y-2 text-lg">
                        <label class="text-sm font-bold text-gray-700 ml-1">ইমেইল ঠিকানা</label>
                        <div class="relative group">
                            <i
                                class="fa-solid fa-envelope absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                            <input v-model="form.email" type="email" placeholder="admin@ajkernews.com"
                                class="w-full pl-12 pr-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                            <span v-if="errors.email" class="text-red-500">{{ errors.email[0] }}</span>
                        </div>
                    </div>

                    <!-- ৫. পাসওয়ার্ড ইনপুট (Eye Icon সহ) -->
                    <div class="space-y-2 text-lg">
                        <div class="flex justify-between items-center px-1">
                            <label class="text-sm font-bold text-gray-700">পাসওয়ার্ড</label>
                        </div>
                        <div class="relative group">
                            <i
                                class="fa-solid fa-lock absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                            <input v-model="form.password" :type="showPassword ? 'text' : 'password'"
                                placeholder="••••••••"
                                class="w-full pl-12 pr-12 py-4 bg-gray-50 border border-gray-200 rounded-2xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all font-mono">
                            <span v-if="errors.password" class="text-red-500">{{ errors.password[0] }}</span>
                            <!-- পাসওয়ার্ড দেখার বাটন -->
                            <button @click="showPassword = !showPassword" type="button"
                                class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 cursor-pointer">
                                <i :class="showPassword ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'"></i>
                            </button>
                        </div>
                    </div>

                    <!-- ৬. রিমেম্বার মি -->
                    <div class="flex items-center gap-3 px-1">
                        <input type="checkbox" id="remember" class="w-4 h-4 rounded accent-[#003557] cursor-pointer">
                        <label for="remember" class="text-sm text-gray-500 font-medium cursor-pointer select-none">আমাকে
                            মনে রাখুন</label>
                    </div>

                    <!-- ৭. লগইন বাটন -->
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-[#003557] hover:bg-[#004a7c] text-white py-4 rounded-2xl font-black text-lg shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-3">
                            <span>প্যানেলে প্রবেশ করুন</span>
                            <i class="fa-solid fa-arrow-right-to-bracket text-sm"></i>
                        </button>
                    </div>

                </form>

                <!-- ৮. ফুটার লিঙ্ক -->
                <div class="mt-10 text-center">
                    <router-link to="/"
                        class="text-gray-400 hover:text-gray-700 text-sm font-bold flex items-center justify-center gap-2 transition">
                        <i class="fa-solid fa-house text-xs"></i> মূল ওয়েবসাইটে ফিরে যান
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AppStorage from '../../Helpers/AppStorage';
import Notification from '../../Helpers/Notification';
export default {
    data() {
        return {
            showPassword: false,
            form: {
                email: '',
                password: ''
            },
            errors: {}
        };
    },
    methods: {
        login() {
            axios.post('/api/admin/login', this.form)
                .then(response => {
                    const token = response.data.access_token;
                    const user = response.data.user;

                    AppStorage.store(token, user);

                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;


                    Notification.success('Login successful');
                    this.$router.push({name: 'adminDashboard'});
                })
                .catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    } else {
                        Notification.error('Something went wrong');
                    }
                });
        }
    }
};
</script>

<style scoped>
.shadow-2xl {
    box-shadow: 0 25px 50px -12px rgba(0, 53, 87, 0.15);
}
</style>