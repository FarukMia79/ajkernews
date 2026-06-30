<template>
    <div class="max-w-4xl mx-auto p-4 md:p-6">
        <!-- title and breadcrumb -->
        <div class="mb-8">
            <h1 class="text-2xl font-black text-gray-800 tracking-tight">নতুন ক্যাটাগরি যোগ করুন</h1>
            <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                <span>অ্যাডমিন</span>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <span>ক্যাটাগরি</span>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <span class="text-blue-600 font-medium">তৈরি করুন</span>
            </nav>
        </div>

        <!-- form -->
        <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100">
            <div class="p-6 md:p-10">
                <form @submit.prevent="submitForm" class="space-y-8">

                    <!-- category name and slug -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- নাম -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1 flex items-center gap-2">
                                <i class="fa-solid fa-tag text-blue-500"></i> ক্যাটাগরির নাম
                            </label>
                            <input v-model="form.name" type="text" placeholder="উদা: রাজনীতি বা বিনোদন"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all duration-300">
                        </div>

                        <!-- slug -->
                        <div class="flex flex-col gap-2 text-lg">
                            <label class="text-sm font-bold text-gray-700 ml-1 flex items-center gap-2">
                                <i class="fa-solid fa-link text-gray-400"></i> স্লাগ / URL
                            </label>
                            <input v-model="form.slug" type="text" placeholder="rajniti"
                                class="w-full bg-gray-100 border border-gray-200 rounded-xl px-4 py-3 text-gray-500 cursor-not-allowed outline-none"
                                readonly>
                        </div>
                    </div>

                    <!-- description -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">সংক্ষিপ্ত বর্ণনা (ঐচ্ছিক)</label>
                        <textarea v-model="form.description" rows="4" placeholder="এই ক্যাটাগরি সম্পর্কে কিছু লিখুন..."
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all duration-300 resize-none"></textarea>
                    </div>

                    <!-- status and submit button -->
                    <div
                        class="flex flex-col md:flex-row justify-between items-center gap-6 pt-6 border-t border-gray-50">
                        <!-- status select -->
                        <div class="flex items-center gap-4">
                            <label class="text-sm font-bold text-gray-700">অবস্থা:</label>
                            <select v-model="form.status"
                                class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                                <option value="">-- নির্বাচন করুন --</option>
                                <option value="active">সক্রিয় (Active)</option>
                                <option value="inactive">নিষ্ক্রিয় (Inactive)</option>
                            </select>
                        </div>

                        <!-- action buttons -->
                        <div class="flex items-center gap-4 w-full md:w-auto">
                            <button
                                class="flex-1 md:flex-none px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition">
                                বাতিল
                            </button>
                            <button type="submit"
                                class="flex-1 md:flex-none bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 transform active:scale-95 flex items-center justify-center gap-2">
                                <i class="fa-solid fa-check"></i> ক্যাটাগরি সেভ করুন
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- Help Tips section -->
        <div class="mt-8 p-4 bg-blue-50 border-l-4 border-blue-400 rounded-r-lg flex gap-4 items-start">
            <i class="fa-solid fa-circle-info text-blue-500 mt-1"></i>
            <div>
                <h4 class="text-sm font-bold text-blue-800">পেশাদার টিপস:</h4>
                <p class="text-xs text-blue-700 leading-relaxed mt-0.5">
                    এসইও-র জন্য সুন্দর এবং অর্থবহ ক্যাটাগরি নাম ব্যবহার করুন। স্লাগটি ক্যাটাগরি নামের ওপর ভিত্তি করে
                    অটোমেটিক তৈরি হবে যা আপনার নিউজের লিঙ্কে (URL) ব্যবহৃত হবে।
                </p>
            </div>
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
                slug: '',
                description: '',
                status: '',
            },
            errors: {}
        }
    },
    
    watch: {
        'form.name'(newValue) {
            this.form.slug = this.generateSlug(newValue);
        }
    },
    methods: {
        // 2. Slug generator function
        generateSlug(text) {
            return text
                .toString()
                .trim()
                .toLowerCase() // all letters to lowercase
                .replace(/\s+/g, '-') // replace spaces with hyphens
                .replace(/[^\w\-]+/g, '') // remove special characters
                .replace(/\-\-+/g, '-'); // replace multiple hyphens with single hyphen
        },

        submitForm() {
            this.errors = {}; // clear previous errors
            let formData = new FormData();
            formData.append('name', this.form.name);
            formData.append('slug', this.form.slug); // slug will be auto-generated
            formData.append('description', this.form.description || '');
            formData.append('status', this.form.status);

            axios.post('/api/category', formData)
                .then(response => {
                    Notification.success('Category created successfully');
                    this.$router.push('/admin/categories');
                })
                .catch(error => {
                    if (error.response && error.response.status === 422) {
                        this.errors = error.response.data.errors;
                        Notification.error('Please fill all required fields');
                    } else {
                        Notification.error('Category save failed');
                    }
                });
        }
    }
}
</script>

<style scoped>
.rounded-2xl {
    transition: box-shadow 0.3s ease;
}

.rounded-2xl:hover {
    box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.05);
}
</style>