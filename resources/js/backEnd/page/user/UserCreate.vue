<template>
    <div class="max-w-4xl mx-auto p-2 md:p-6">
        <!-- হেডার -->
        <div class="flex justify-between items-center mb-8 bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
            <div>
                <h2 class="text-2xl font-black text-gray-800 tracking-tight">ইউজার প্রোফাইল তৈরি</h2>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/users" class="hover:text-blue-600">ইউজার লিস্ট</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">ইউজার তৈরি</span>
                </nav>
            </div>
            <router-link to="/admin/users"
                class="p-2.5 bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                <i class="fa-solid fa-arrow-left"></i>
            </router-link>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <form @submit.prevent="formSubmit" enctype="multipart/form-data" class="p-6 md:p-10 space-y-8">

                <!-- প্রোফাইল পিকচার সেকশন -->
                <div class="flex flex-col items-center pb-8 border-b border-gray-50">
                    <div class="relative group">
                        <img :src="imagePreview || 'https://ui-avatars.com/api/?name=Image&size=128&background=random'"
                            class="w-32 h-32 rounded-full border-4 border-white shadow-lg object-cover">
                        <label
                            class="absolute bottom-0 right-0 bg-[#003557] text-white p-2 rounded-full cursor-pointer hover:bg-blue-600 shadow-md transition transform group-hover:scale-110">
                            <i class="fa-solid fa-camera text-sm"></i>
                            <input @change="handleImageUpload" type="file" class="hidden">
                        </label>
                    </div>
                    <p class="mt-3 text-xs text-gray-400 font-bold uppercase tracking-widest">প্রোফাইল ছবি আপলোড করুন
                    </p>
                </div>

                <!-- ইউজার ইনফো গ্রিড -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">পূর্ণ নাম</label>
                        <input v-model="form.name" type="text" placeholder="ফারুক আহমেদ"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                        <span v-if="errors.name" class="text-red-500 text-xs mt-1 block">{{ errors.name[0] }}</span>
                    </div>
                    <div class="flex flex-col gap-2 text-lg">
                        <label class="text-sm font-bold text-gray-700 ml-1">ইমেইল ঠিকানা</label>
                        <input v-model="form.email" type="email" placeholder="faruk1@gmail.com"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                        <span v-if="errors.email" class="text-red-500 text-xs mt-1 block">{{ errors.email[0] }}</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col gap-2 text-lg">
                        <label class="text-sm font-bold text-gray-700 ml-1">ইউজার রোল (Role)</label>
                        <select v-model="form.role"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                            <option value="">-- রোল নির্বাচন করুন --</option>
                            <option value="admin">Admin</option>
                            <option value="editor">Editor</option>
                            <option value="reporter">Reporter</option>
                        </select>
                        <span v-if="errors.role" class="text-red-500 text-xs mt-1 block">{{ errors.role[0] }}</span>
                    </div>
                    <div class="flex flex-col gap-2 text-lg">
                        <label class="text-sm font-bold text-gray-700 ml-1">অ্যাকাউন্ট স্ট্যাটাস</label>
                        <select v-model="form.status"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                            <option value="">-- স্ট্যাটাস নির্বাচন করুন --</option>
                            <option value="active">অ্যাক্টিভ (Active)</option>
                            <option value="inactive">নিষ্ক্রিয় (Inactive)</option>
                        </select>
                        <span v-if="errors.status" class="text-red-500 text-xs mt-1 block">{{ errors.status[0] }}</span>
                    </div>
                </div>

                <!-- পাসওয়ার্ড সেকশন -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
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
                            <span v-if="errors.password" class="text-red-500 text-xs mt-3 block">{{ errors.password[0] }}</span>
                            <!-- পাসওয়ার্ড দেখার বাটন -->
                            <button @click="showPassword = !showPassword" type="button"
                                class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 cursor-pointer">
                                <i :class="showPassword ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'"></i>
                            </button>
                        </div>
                    </div>

                    <div class="space-y-2 text-lg">
                        <div class="flex justify-between items-center px-1">
                            <label class="text-sm font-bold text-gray-700">পাসওয়ার্ড নিশ্চিত করুন</label>
                        </div>
                        <div class="relative group">
                            <i
                                class="fa-solid fa-lock absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                            <input v-model="form.password_confirmation" :type="showPassword ? 'text' : 'password'"
                                placeholder="••••••••"
                                class="w-full pl-12 pr-12 py-4 bg-gray-50 border border-gray-200 rounded-2xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all font-mono">
                            <span v-if="errors.password" class="text-red-500 text-xs mt-3 block">{{ errors.password[0] }}</span>
                            <!-- পাসওয়ার্ড দেখার বাটন -->
                            <button @click="showPassword = !showPassword" type="button"
                                class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 cursor-pointer">
                                <i :class="showPassword ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <!-- বাটন -->
                <div class="pt-6 border-t border-gray-50 flex justify-end gap-4">
                    <button class="px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition">বাতিল</button>
                    <button type="submit"
                        class="bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center gap-2">
                        <i class="fa-solid fa-user-check"></i> ইউজার তৈরি করুন
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import Notification from '../../../helpers/Notification';
export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                image: '',
                password: '',
                password_confirmation: '',
                role: '',
                status: ''
            },
            errors: {},
            imagePreview: null,
            showPassword: false
        }
    },
    methods: {
        handleImageUpload(event) {
            const file = event.target.files[0];
            if (file?.size > 2 * 1024 * 1024) {
                Notification.error('File size must be less than 2MB');
                return;
            }
            this.form.image = file;
            this.imagePreview = URL.createObjectURL(file);
        },
        formSubmit() {
            let formData = new FormData();
            formData.append('name', this.form.name);
            formData.append('email', this.form.email);
            formData.append('image', this.form.image || '');
            formData.append('password', this.form.password);
            formData.append('password_confirmation', this.form.password_confirmation);
            formData.append('role', this.form.role);
            formData.append('status', this.form.status);

            axios.post('/api/users', formData)
                .then(response => {
                    Notification.success('User created successfully');
                    this.$router.push('/admin/users');
                })
                .catch(error => {
                    if (error.response && error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                    Notification.error('Failed to create user');
                    console.log(error);
                });
        }
    }
}
</script>

<style scoped></style>