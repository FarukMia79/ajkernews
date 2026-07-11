<template>
    <div class="max-w-4xl mx-auto p-2 md:p-6 font-sans">
        <!-- page title and breadcrumb -->
        <div class="flex justify-between items-center mb-8 bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
            <div>
                <h2 class="text-2xl font-black text-gray-800 tracking-tight">নতুন ছবি যোগ করুন</h2>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/photo-gallery" class="hover:text-blue-600 font-medium">ফটো
                        গ্যালারি</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-bold">ছবি আপলোড</span>
                </nav>
            </div>
            <router-link to="/admin/photo-gallery"
                class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 rounded-xl font-bold transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> গ্যালারিতে ফিরে যান
            </router-link>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <form @submit.prevent="submitForm" enctype="multipart/form-data" class="p-6 md:p-10 space-y-8">

                <!-- file upload area -->
                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700 ml-1">ছবি নির্বাচন করুন <span
                            class="text-red-500">*</span></label>
                    <div
                        class="relative group border-2 border-dashed border-gray-200 rounded-3xl p-10 text-center hover:border-blue-400 hover:bg-blue-50/30 transition-all cursor-pointer">
                        <input @change="handleImageUpload" type="file" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full z-10">

                        <!-- show preview if image selected, otherwise show upload prompt -->
                        <div v-if="imagePreview" class="space-y-4">
                            <div class="w-full h-64 overflow-hidden rounded-2xl">
                                <img :src="imagePreview" class="w-full h-full object-cover">
                            </div>
                            <p class="text-sm text-green-600 font-bold">ছবি নির্বাচন করা হয়েছে</p>
                        </div>
                        <div v-else class="space-y-4">
                            <div
                                class="bg-blue-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-blue-500"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-700">এখানে ছবি ড্র্যাগ করুন অথবা ক্লিক করুন</h3>
                                <p class="text-sm text-gray-400 italic">সুপারিশকৃত সাইজ: ৬০০ x ৩৩৭ (সর্বোচ্চ ২ এমবি)</p>
                            </div>
                        </div>
                    </div>
                    <small v-if="errors.image" class="text-red-500 italic">{{ errors.image?.[0] }}</small>
                </div>

                <!-- caption and details -->
                <div class="space-y-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">ছবির ক্যাপশন</label>
                        <input v-model="form.caption" type="text" placeholder="ছবির একটি সুন্দর শিরোনাম দিন..."
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all text-lg">
                        <small v-if="errors.caption" class="text-red-500 italic">{{ errors.caption[0] }}</small>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- category -->
                        <div class="flex flex-col gap-2 text-lg">
                            <label class="text-sm font-bold text-gray-700 ml-1">গ্যালারি অ্যালবাম</label>
                            <select v-model="form.album"
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                                <option value="">অ্যালবাম নির্বাচন করুন (যদি থাকে)</option>
                                <option v-for="category in categories" :key="category.id" :value="category.name">
                                    {{ category.name }}
                                </option>
                            </select>
                            <small v-if="errors.album" class="text-red-500 italic">{{ errors.album[0] }}</small>
                        </div>

                        <!-- date -->
                        <div class="flex flex-col gap-2 text-lg">
                            <label class="text-sm font-bold text-gray-700 ml-1">ক্যাপশনের তারিখ</label>
                            <input v-model="form.date" type="date"
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-gray-50 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <!-- status select -->
                    <div class="flex items-center gap-4">
                        <label class="text-sm font-bold text-gray-700">অবস্থা:</label>
                        <select v-model="form.status"
                            class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                            <option value="">-- নির্বাচন করুন --</option>
                            <option value="active">সক্রিয় (Active)</option>
                            <option value="inactive">নিষ্ক্রিয় (Inactive)</option>
                        </select>
                        <small v-if="errors.status" class="text-red-500 italic">{{ errors.status[0] }}</small>
                    </div>
                    <div class="flex gap-3">
                        <button type="button"
                            class="px-8 py-3.5 text-gray-500 hover:text-gray-800 font-bold transition">বাতিল</button>
                        <button type="submit"
                            class="bg-[#003557] hover:bg-[#004a7c] text-white px-12 py-3.5 rounded-2xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-upload"></i> ছবি আপলোড সম্পন্ন করুন
                        </button>
                    </div>
                </div>

            </form>
        </div>

        <!-- upload progress bar -->
        <div v-if="uploadProgress > 0 && uploadProgress < 100" class="mt-6 bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="bg-blue-100 p-3 rounded-xl">
                <i class="fa-solid fa-spinner animate-spin text-blue-600"></i>
            </div>
            <div class="flex-1">
                <div class="flex justify-between mb-1">
                    <span class="text-xs font-bold text-gray-700 uppercase">আপলোড হচ্ছে...</span>
                    <span class="text-xs font-bold text-blue-600">{{ uploadProgress }}%</span>
                </div>
                <div class="w-full bg-gray-100 rounded-full h-1.5">
                    <div class="bg-blue-500 h-1.5 rounded-full" :style="{ width: uploadProgress + '%' }"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Notification from '../../../../Helpers/Notification';
import AppStorage from '../../../../helpers/AppStorage';

export default {
    data() {
        return {
            form: {
                user_id: AppStorage.getUser()?.id || '',
                image: null,
                caption: '',
                album: '',
                date: '',
                size: '',
                status: '',
            },
            categories: [],
            imagePreview: null,
            errors: {},
            uploadProgress: 0

        }
    },
    mounted() {
        this.getCategories();
    },
    methods: {
        getCategories() {
            axios.get('/api/category')
                .then(response => {
                    this.categories = response.data.data;
                    console.log(this.categories);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        handleImageUpload(event) {
            const file = event.target.files[0];
            if (file?.size > 2 * 1024 * 1024) {
                Notification.error('File size must be less than 2MB');
                event.target.value = '';
                this.imagePreview = null;
                return;
            }
            if (file.type !== 'image/jpeg' && file.type !== 'image/jpg' && file.type !== 'image/png' && file.type !== 'image/gif' && file.type !== 'image/svg') {
                Notification.error('Image must be jpeg, jpg, png, gif or svg');
                event.target.value = '';
                this.imagePreview = null;
                return;
            }
            this.form.size = (file.size / (1024 * 1024)).toFixed(2);
            this.form.image = file;
            this.imagePreview = URL.createObjectURL(file);
        },
        submitForm() {
            let formData = new FormData();
            
            formData.append('user_id', this.form.user_id);
            formData.append('image', this.form.image);
            formData.append('caption', this.form.caption || '');
            formData.append('album', this.form.album || '');
            formData.append('date', this.form.date || '');
            formData.append('size', this.form.size || '');
            formData.append('status', this.form.status);

            this.uploadProgress = 0;

            axios.post('/api/gallery/photo', formData, {
                onUploadProgress: (progressEvent) => {
                    this.uploadProgress = Math.round((progressEvent.loaded * 100) / progressEvent.total);
                }
            })
                .then(response => {
                    this.uploadProgress = 100;
                    
                    setTimeout(() => {
                        this.uploadProgress = 0;
                        Notification.success('Photo uploaded successfully');
                        this.$router.push('/admin/photo-gallery');
                    }, 1000);

                })
                .catch(error => {
                    this.uploadProgress = 0;
                    console.log(error);
                });
        }
    }
}
</script>

<style scoped></style>