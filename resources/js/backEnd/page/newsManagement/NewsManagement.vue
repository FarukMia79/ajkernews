<template>
    <div class="p-2 md:p-4">
        <!-- title and breadcrumb -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">নিউজ ম্যানেজমেন্ট</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">সব খবর</span>
                </nav>
            </div>
            <router-link to="/admin/news/create"
                class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-pen-nib"></i> নতুন খবর লিখুন
            </router-link>
        </div>

        <!-- filter and search -->
        <div class="bg-white p-5 rounded-t-2xl border-x border-t border-gray-100 grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- সার্চ বার -->
            <div class="relative md:col-span-2">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input v-model="search" type="text" placeholder="খবরের শিরোনাম বা কি-ওয়ার্ড দিয়ে খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
            </div>
            <!-- category filter -->
            <select v-model="filterCategory"
                class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">ক্যাটাগরি</option>
                <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
            </select>
            <!-- status filter -->
            <select v-model="filterStatus"
                class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">স্ট্যাটাস</option>
                <option value="published">পাবলিশড</option>
                <option value="draft">ড্রাফট</option>
            </select>
        </div>

        <!-- news table -->
        <div class="bg-white rounded-b-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">থাম্বনেইল
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">খবরের শিরোনাম
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ক্যাটাগরি
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">লেখক</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">তারিখ</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr v-for="item in news" :key="item.id" class="hover:bg-blue-50/30 transition-colors group">
                            <!-- image -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img :src="item.image" :alt="item.title" class="w-16 h-10 object-cover rounded shadow-sm">
                            </td>
                            <!-- title -->
                            <td class="px-6 py-4 min-w-[250px]">
                                <a href="#"
                                    class="text-gray-800 font-bold group-hover:text-blue-600 transition-colors line-clamp-1">
                                    {{ item.title }}
                                </a>
                                <p class="text-[10px] text-gray-400 mt-0.5">ভিউ হয়েছে: {{ item.views }} বার</p>
                            </td>
                            <!-- caregory -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded-md text-[11px] font-bold bg-blue-100 text-blue-700">{{ item.category }}</span>
                            </td>
                            <!-- reporter -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <img :src="item.reporter_image" class="w-6 h-6 rounded-full">
                                    <span class="text-sm text-gray-600 font-medium">{{ item.reporter_name }}</span>
                                </div>
                            </td>
                            <!-- date -->
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ item.created_at }}
                            </td>
                            <!-- status -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span v-if="item.status === 'published'"
                                    class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                    <i class="fa-solid fa-circle-check text-[10px]"></i> পাবলিশড
                                </span>
                                <span v-else
                                    class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
                                    <i class="fa-solid fa-clock text-[10px]"></i> ড্রাফট
                                </span>
                            </td>
                            <!-- action buttons -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end gap-2">
                                    <router-link 
                                        :to="{ name: 'adminShowNews', params: { id: item.id } }"
                                        class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                        title="দেখুন">
                                        <i class="fa-solid fa-eye"></i>
                                    </router-link>
                                    <router-link :to="{ name: 'adminEditNews', params: { id: item.id } }"
                                        class="p-2 text-gray-400 hover:text-green-600 hover:bg-green-50 rounded-lg transition"
                                        title="এডিট">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </router-link>
                                    <button @click="deleteNews(item.id)"
                                        class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                        title="ডিলিট">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- pagination -->
            <div
                class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">
                <span v-if="meta.total" class="text-sm text-gray-500 font-medium">মোট {{ meta.total }}টি খবরের মধ্যে {{ meta.from }}-{{ meta.to }}টি দেখানো হচ্ছে</span>
                <div class="flex gap-2">
                    <button @click="getNews(meta.current_page - 1)" :disabled="meta.current_page === 1" :class="meta.current_page === 1 ? 'opacity-50 cursor-not-allowed' : ''"
                        class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-700 hover:border-blue-500 hover:text-blue-600 font-bold transition flex items-center gap-2">
                        <i class="fa-solid fa-chevron-left text-xs"></i> Previous
                    </button>
                    <button @click="getNews(meta.current_page + 1)" :disabled="meta.current_page === meta.last_page" :class="meta.current_page === meta.last_page ? 'opacity-50 cursor-not-allowed' : ''"
                        class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-700 hover:border-blue-500 hover:text-blue-600 font-bold transition flex items-center gap-2">
                        Next <i class="fa-solid fa-chevron-right text-xs"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            news: [],
            categories: [],
            meta: {},
            search: '',
            filterCategory: '',
            filterStatus: ''
        }
    },
    watch: {
        search() {
            this.getNews();
        },
        filterStatus() {
            this.getNews();
        },
        filterCategory() {
            this.getNews();
        }
    },
    mounted() {
        this.getNews();
        this.getCategories();
    },
    methods: {
        getNews(page = 1) {
            axios.get('/api/news', {
                params: {
                    page: page,
                    search: this.search,
                    status: this.filterStatus,
                    category_id: this.filterCategory
                }
            })
                .then(response => {
                    this.news = response.data.data;
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
        },
        deleteNews(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your news has been deleted.",
                        icon: "success"
                    });
                    axios.delete('/api/news/delete/' + id)
                        .then(() => {
                            this.news = this.news.filter(news => {
                                return news.id != id;
                            });
                        }).catch((error) => {
                            console.log(error);
                        });
                }
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