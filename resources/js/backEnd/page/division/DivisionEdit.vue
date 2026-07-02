<template>
    <div class="max-w-4xl mx-auto p-4 md:p-6">
        <!-- page title and breadcrumb -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">বিভাগ সংশোধন করুন</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span>বিভাগ</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-orange-600 font-medium">এডিট করুন</span>
                </nav>
            </div>
            <router-link to="/admin/divisions"
                class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-2.5 rounded-xl font-bold transition-all duration-300 flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> ফিরে যান
            </router-link>
        </div>

        <!-- category edit form card -->
        <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="h-1.5 bg-orange-500 w-full"></div>

            <div class="p-6 md:p-10">
                <form @submit.prevent="updateDivision" class="space-y-8">

                    <!-- name and slug -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- name -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">বিভাগের নাম</label>
                            <input v-model="form.name" type="text"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all duration-300 font-bold">
                        </div>

                        <!-- slug -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">স্লাগ / URL (পরিবর্তন না করাই
                                ভালো)</label>
                            <input v-model="form.slug" type="text"
                                class="w-full bg-gray-100 border border-gray-200 rounded-xl px-4 py-3 text-gray-500 outline-none cursor-not-allowed"
                                readonly>
                        </div>
                    </div>

                    <!-- description -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">সংক্ষিপ্ত বর্ণনা</label>
                        <textarea v-model="form.description" rows="4"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all duration-300 resize-none">বাংলাদেশের সব জেলার সর্বশেষ খবর এই ক্যাটাগরিতে থাকবে।</textarea>
                    </div>

                    <!-- status and submit button -->
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
                                class="flex-1 md:flex-none px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition">
                                বাতিল
                            </button>
                            <button type="submit"
                                class="flex-1 md:flex-none bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 transform active:scale-95 flex items-center justify-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> পরিবর্তন সেভ করুন
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- tips -->
        <div class="mt-8 p-4 bg-orange-50 border-l-4 border-orange-400 rounded-r-lg flex gap-4 items-start">
            <i class="fa-solid fa-triangle-exclamation text-orange-500 mt-1"></i>
            <div>
                <h4 class="text-sm font-bold text-orange-800">সাবধানতা:</h4>
                <p class="text-xs text-orange-700 leading-relaxed mt-0.5">
                    বিভাগের নাম বা স্লাগ পরিবর্তন করলে এই বিভাগের অধীনে থাকা সব খবরের লিঙ্কে (URL) প্রভাব পড়তে
                    পারে। তাই পরিবর্তন করার আগে নিশ্চিত হয়ে নিন।
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
                name: '',
                slug: '',
                description: '',
                status: ''
            },
            id: this.$route.params.id,
            errors: {}
        }
    },
    watch: {
        'form.name'(newVal) {
            this.generateSlug();
        }
    },
    mounted() {
        this.getDivision();
    },
    methods: {
        generateSlug(text) {
            this.form.slug = this.form.name.toLowerCase().replace(/ /g, '-');
        },
        getDivision() {
            axios.get(`/api/division/${this.id}`)
                .then(response => {
                    this.form = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        updateDivision() {
            let formData = new FormData();
            formData.append('name', this.form.name);
            formData.append('slug', this.form.slug);
            formData.append('description', this.form.description || '');
            formData.append('status', this.form.status);

            formData.append('_method', 'PUT');

            axios.post(`/api/division/update/${this.id}`, formData)
                .then(response => {
                    Notification.success('Division updated successfully');
                    this.$router.push('/admin/divisions');
                })
                .catch(error => {
                    Notification.error('Division update failed');
                    console.log(error);
                });
        }
    }
}
</script>

<style scoped>
input:focus,
textarea:focus {
    border-color: #f97316;
}
</style>