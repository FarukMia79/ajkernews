<template>
    <div class="max-w-4xl mx-auto p-2 md:p-6 font-sans">
        <!-- হেডার -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">সাব-ক্যাটাগরি সংশোধন</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/sub-categories" class="hover:text-blue-600">সাব-ক্যাটাগরি</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-orange-600 font-medium">এডিট করুন</span>
                </nav>
            </div>
            <router-link to="/admin/sub-categories"
                class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-2.5 rounded-xl font-bold transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> ফিরে যান
            </router-link>
        </div>

        <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="h-1.5 bg-orange-500 w-full"></div>
            <div class="p-6 md:p-10">
                <form @submit.prevent="updateSubCategory" class="space-y-6">

                    <!-- মূল ক্যাটাগরি নির্বাচন -->
                    <div class="flex flex-col gap-2 text-lg">
                        <label class="text-sm font-bold text-gray-700 ml-1">মূল ক্যাটাগরি</label>
                        <select v-model="form.category_id"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all cursor-pointer">
                            <option v-for="category in categories" :key="category.id" :value="category.id">
                                {{ category.name }}
                            </option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-lg">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">সাব-ক্যাটাগরির নাম</label>
                            <input v-model="form.name" type="text"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all font-bold">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1 text-xs">স্লাগ / URL (পরিবর্তন না করাই
                                ভালো)</label>
                            <input v-model="form.slug" type="text"
                                class="w-full bg-gray-100 border border-gray-200 rounded-xl px-4 py-3 text-gray-500 outline-none cursor-not-allowed"
                                readonly>
                        </div>
                    </div>

                    <div
                        class="flex flex-col md:flex-row justify-between items-center gap-6 pt-6 border-t border-gray-50">
                        <div class="flex items-center gap-4">
                            <label class="text-sm font-bold text-gray-700">অবস্থা:</label>
                            <select v-model="form.status"
                                class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-orange-500 transition cursor-pointer">
                                <option value="active">সক্রিয় (Active)</option>
                                <option value="inactive">নিষ্ক্রিয় (Inactive)</option>
                            </select>
                        </div>

                        <div class="flex items-center gap-4 w-full md:w-auto">
                            <button
                                class="flex-1 md:flex-none px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition">বাতিল</button>
                            <button type="submit"
                                class="flex-1 md:flex-none bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> আপডেট করুন
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- সতর্কতা বক্স -->
        <div class="mt-8 p-4 bg-orange-50 border-l-4 border-orange-400 rounded-r-lg flex gap-4 items-start">
            <i class="fa-solid fa-triangle-exclamation text-orange-500 mt-1"></i>
            <div>
                <h4 class="text-sm font-bold text-orange-800">এসইও সতর্কতা:</h4>
                <p class="text-xs text-orange-700 leading-relaxed mt-0.5">
                    মূল ক্যাটাগরি বা সাব-ক্যাটাগরির স্লাগ পরিবর্তন করলে আপনার নিউজের আগের লিঙ্কগুলো অকেজো হয়ে যেতে পারে।
                    পরিবর্তনের আগে নিশ্চিত হয়ে নিন।
                </p>
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
                status: ''
            },
            categories: [],
            id: this.$route.params.id
        }
    },
    watch: {
        'form.name'(newVal) {
            this.generateSlug();
        }
    },
    mounted() {
        this.getSubCategory();
        this.getCategories();
    },
    methods: {
        getSubCategory() {
            axios.get(`/api/sub-category/${this.id}`)
                .then(response => {
                    this.form = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        getCategories() {
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
        updateSubCategory() {
            let formData = new FormData();
            formData.append('category_id', this.form.category_id);
            formData.append('name', this.form.name);
            formData.append('slug', this.form.slug);
            formData.append('status', this.form.status);
            formData.append('_method', 'PUT');
            
            axios.post(`/api/sub-category/update/${this.id}`, formData)
                .then(response => {
                    Notification.success('Sub category updated successfully');
                    this.$router.push('/admin/sub-categories');
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>

<style scoped></style>