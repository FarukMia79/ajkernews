<template>
    <div class="p-2 md:p-4">
        <!-- title and breadcrumb -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">সাব-ক্যাটাগরি তালিকা</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">সাব-ক্যাটাগরি</span>
                </nav>
            </div>
            <router-link to="/admin/sub-categories/create" class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-plus"></i> নতুন সাব-ক্যাটাগরি
            </router-link>
        </div>

        <!-- filter and search bar -->
        <div class="bg-white p-5 rounded-t-2xl border-x border-t border-gray-100 grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- সার্চ বার -->
            <div class="relative md:col-span-2">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input 
                    v-model="search"
                    type="text" 
                    placeholder="সাব-ক্যাটাগরি খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all"
                >
            </div>
            <!-- parent category filter -->
            <select v-model="filterCategory" class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">সব মূল ক্যাটাগরি</option>
                <option v-for="cat in categories" :key="cat.id" :value="cat.id">{{ cat.name }}</option>
            </select>
            <!-- status filter -->
            <select v-model="filterStatus" class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">সব স্ট্যাটাস</option>
                <option value="inactive">নিষ্ক্রিয়</option>
                <option value="active">সক্রিয়</option>
            </select>
        </div>

        <!-- sub category table -->
        <div class="bg-white rounded-b-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">আইডি</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">সাব-ক্যাটাগরি নাম</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">মূল ক্যাটাগরি</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">স্লাগ (URL)</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr v-for="(subCategory, index) in subCategories" :key="index" class="hover:bg-blue-50/30 transition-colors group text-lg">
                            <td class="px-6 py-4 text-sm text-gray-600 font-medium">#{{ index + 1 }}</td>
                            <td class="px-6 py-4">
                                <span class="text-gray-800 font-bold group-hover:text-blue-600 transition-colors">{{ subCategory.name }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-600 border border-blue-100 italic">
                                    <i class="fa-solid fa-folder-open text-[10px] mr-1"></i> {{ subCategory.category_name }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 italic">{{ subCategory.slug }}</td>
                            <td class="px-6 py-4">
                                <span v-if="subCategory.status === 'active'" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> সক্রিয়
                                </span>
                                <span v-else class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> নিষ্ক্রিয়
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <router-link :to="{ name: 'adminEditSubCategory', params: { id: subCategory.id } }" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition" title="এডিট">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </router-link>
                                    <button class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition" title="ডিলিট">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- pagination -->
            <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex justify-between items-center">
                <span v-if="meta.total" class="text-sm text-gray-500 font-medium">মোট {{ meta.total }}টি সাব-ক্যাটাগরির মধ্যে {{ meta.from }}-{{ meta.to }}টি দেখানো হচ্ছে</span>
                <div class="flex gap-2">
                    <button @click="getSubCategories(meta.current_page - 1)" :disabled="meta.current_page === 1" :class="meta.current_page === 1 ? 'px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-400 font-bold transition text-sm' : 'px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-700 hover:text-blue-600 font-bold transition text-sm'">Previous</button>
                    <button @click="getSubCategories(meta.current_page + 1)" :disabled="meta.current_page === meta.last_page" :class="meta.current_page === meta.last_page ? 'px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-400 font-bold transition text-sm' : 'px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-700 hover:text-blue-600 font-bold transition text-sm'">Next</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            subCategories: [],
            categories: [],
            meta: {},
            search: '',
            filterCategory: '',
            filterStatus: ''
        }
    },
    watch: {
        search() {
            this.getSubCategories(1);
        },
        filterCategory() {
            this.getSubCategories(1);
        },
        filterStatus() {
            this.getSubCategories(1);
        }
    },
    mounted() {
        this.getSubCategories();
        this.getCategories();
    },
    methods: {
        getSubCategories(page = 1) {
            axios.get('/api/sub-category', {
                params: {
                    page: page,
                    search: this.search,
                    category_id: this.filterCategory,
                    status: this.filterStatus
                }
            })
                .then(response => {
                    this.subCategories = response.data.data;
                    this.meta = response.data.meta;
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
        }
    }
}
</script>

<style scoped>
th {
    letter-spacing: 0.05em;
}
</style>