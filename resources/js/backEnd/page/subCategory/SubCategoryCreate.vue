<template>
    <div class="max-w-4xl mx-auto p-2 md:p-6 font-sans">
        <!-- হেডার ও ব্রেডক্রাম্ব -->
        <div class="mb-8">
            <h1 class="text-2xl font-black text-gray-800 tracking-tight">নতুন সাব-ক্যাটাগরি যোগ করুন</h1>
            <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                <span>অ্যাডমিন</span>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <router-link to="/admin/sub-categories" class="hover:text-blue-600">সাব-ক্যাটাগরি</router-link>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <span class="text-blue-600 font-medium">তৈরি করুন</span>
            </nav>
        </div>

        <!-- মেইন ফর্ম কার্ড -->
        <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="p-6 md:p-10">
                <form @submit.prevent="submitForm" class="space-y-6">
                    
                    <!-- মূল ক্যাটাগরি নির্বাচন (এটিই মেইন পার্ট) -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1 flex items-center gap-2">
                            <i class="fa-solid fa-folder-tree text-blue-500"></i> মূল ক্যাটাগরি নির্বাচন করুন
                        </label>
                        <select v-model="form.category_id" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all cursor-pointer">
                            <option value="">ক্যাটাগরি বেছে নিন...</option>
                            <option v-for="category in categories" :key="category.id" :value="category.id">
                                {{ category.name }}
                            </option>
                        </select>
                    </div>

                    <!-- সাব-ক্যাটাগরি নাম এবং স্লাগ -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">সাব-ক্যাটাগরির নাম</label>
                            <input v-model="form.name" type="text" placeholder="উদা: ক্রিকেট বা ফুটবল" 
                                   class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                            <small v-if="errors.name" class="text-red-500">{{ errors.name[0] }}</small>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">স্লাগ (URL)</label>
                            <input v-model="form.slug" type="text" placeholder="cricket" 
                                   class="w-full bg-gray-100 border border-gray-200 rounded-xl px-4 py-3 text-gray-500 cursor-not-allowed outline-none" readonly>
                            <small v-if="errors.slug" class="text-red-500">{{ errors.slug[0] }}</small>
                        </div>
                    </div>

                    <!-- স্ট্যাটাস এবং সাবমিট বাটন -->
                    <div class="flex flex-col md:flex-row justify-between items-center gap-6 pt-6 border-t border-gray-50">
                        <div class="flex items-center gap-4">
                            <label class="text-sm font-bold text-gray-700">অবস্থা:</label>
                            <select v-model="form.status" class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                                <option value="">-- নির্বাচন করুন --</option>
                                <option value="active">সক্রিয় (Active)</option>
                                <option value="inactive">নিষ্ক্রিয় (Inactive)</option>
                            </select>
                        </div>

                        <div class="flex items-center gap-4 w-full md:w-auto">
                            <button class="flex-1 md:flex-none px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition">বাতিল</button>
                            <button type="submit" class="flex-1 md:flex-none bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2">
                                <i class="fa-solid fa-plus-circle"></i> সাব-ক্যাটাগরি সেভ করুন
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                category_id: '',
                name: '',
                slug: '',
                status: '',
            },
            categories: [],
            errors: {}
        }
    },
    mounted() {
        this.fetchCategories();
    },
    watch: {
        'form.name'(newVal) {
            this.generateSlug();
        }
    },
    methods: {
        fetchCategories() {
            axios.get('/api/category')
                .then(response => {
                    this.categories = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        generateSlug() {
            this.form.slug = this.form.name.toLowerCase().replace(/ /g, '-');
        },
        submitForm() {
            let formData = new FormData();
            
            formData.append('category_id', this.form.category_id);
            formData.append('name', this.form.name);
            formData.append('slug', this.form.slug);
            formData.append('status', this.form.status);
            
            axios.post('/api/sub-category', formData)
                .then(response => {
                    Notification.success('Sub-category created successfully');
                    this.$router.push('/admin/sub-categories');
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>

<style scoped>
</style>
