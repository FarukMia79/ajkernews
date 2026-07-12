<template>
    <div class="p-2 md:p-4 font-sans">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-rectangle-ad text-orange-500"></i> বিজ্ঞাপন ব্যবস্থাপনা
                </h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">বিজ্ঞাপন লিস্ট</span>
                </nav>
            </div>
            <router-link to="/admin/advertisements/create"
                class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-plus-circle"></i> নতুন বিজ্ঞাপন যোগ করুন
            </router-link>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-green-100 p-3 rounded-2xl text-green-600"><i class="fa-solid fa-check-double text-xl"></i></div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">মোট বিজ্ঞাপন</p>
                    <p class="text-xl font-black text-gray-800">{{ meta.total || 0 }}টি</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-orange-100 p-3 rounded-2xl text-orange-600"><i class="fa-solid fa-hourglass-half text-xl"></i></div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">অ্যাকটিভ বিজ্ঞাপন</p>
                    <p class="text-xl font-black text-gray-800">{{ activeCount }}টি</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-blue-100 p-3 rounded-2xl text-blue-600"><i class="fa-solid fa-chart-line text-xl"></i></div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">ইনঅ্যাকটিভ বিজ্ঞাপন</p>
                    <p class="text-xl font-black text-gray-800">{{ inactiveCount }}টি</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 rounded-t-3xl border-x border-t border-gray-100 flex flex-col lg:flex-row justify-between gap-4">
            <div class="relative w-full lg:w-96">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input v-model="search" type="text" placeholder="ক্লায়েন্ট বা পজিশন দিয়ে খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:ring-4 focus:ring-blue-500/10 transition-all">
            </div>
            <select v-model="filterPlacement"
                class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">সব পজিশন (All Placements)</option>
                <option value="header">হেডার ব্যানার</option>
                <option value="sidebar">সাইডবার অ্যাড</option>
                <option value="content">নিউজের মাঝখানে</option>
                <option value="content_top">নিউজের ওপরে</option>
                <option value="content_bottom">নিউজের নিচে</option>
                <option value="popup">পপ-আপ</option>
            </select>
            <select v-model="filterStatus"
                class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">সব অবস্থা</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <div class="bg-white rounded-b-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">প্রিভিউ</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ক্লায়েন্ট ও
                                পজিশন</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                                মেয়াদকাল</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr v-for="ad in advertisements" :key="ad.id" class="hover:bg-blue-50/20 transition-colors group">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img v-if="ad.image" :src="ad.image" class="w-32 h-10 object-cover rounded border border-gray-100 shadow-sm">
                                <div v-else class="w-32 h-10 bg-gray-100 rounded border border-gray-100 flex items-center justify-center text-xs text-gray-400">No image</div>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-sm font-bold text-gray-800">{{ ad.client_name }}</p>
                                <span class="text-[10px] font-black uppercase text-blue-500 bg-blue-50 px-1.5 py-0.5 rounded">{{ ad.placement }}</span>
                            </td>
                            <td class="px-6 py-4 text-[11px] text-gray-500 font-bold">
                                {{ formatDate(ad.start_date) }} - <br> {{ formatDate(ad.end_date) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span :class="ad.status === 'active' ? activeStatusClass : inactiveStatusClass">
                                    {{ ad.status === 'active' ? 'একটিভ' : 'ইনঅ্যাকটিভ' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end gap-2">
                                    <router-link :to="{name: 'adminEditAdvertisement', params: {id: ad.id}}"
                                        class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                        title="এডিট"><i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <button @click="deleteAdvertisement(ad.id)"
                                        class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                        title="ডিলিট"><i class="fa-solid fa-trash-can"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr v-if="advertisements.length === 0">
                            <td colspan="5" class="px-6 py-10 text-center text-gray-500">কোনো বিজ্ঞাপন পাওয়া যায়নি</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-6 px-6 pb-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">
                <span v-if="meta.total" class="font-medium">মোট {{ meta.total }}টি বিজ্ঞাপনের মধ্যে {{ meta.from }}-{{ meta.to }} দেখানো হচ্ছে</span>
                <div class="flex gap-2">
                    <button @click="fetchAdvertisements(meta.current_page - 1)" :disabled="meta.current_page === 1"
                        :class="buttonClass(meta.current_page === 1)">Previous</button>
                    <button @click="fetchAdvertisements(meta.current_page + 1)" :disabled="meta.current_page === meta.last_page"
                        :class="buttonClass(meta.current_page === meta.last_page)">Next</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Notification from '../../../helpers/Notification';
export default {
    data() {
        return {
            advertisements: [],
            search: '',
            filterPlacement: '',
            filterStatus: '',
            meta: {},
        };
    },
    watch: {
        search() {
            this.fetchAdvertisements();
        },
        filterPlacement() {
            this.fetchAdvertisements();
        },
        filterStatus() {
            this.fetchAdvertisements();
        }
    },
    computed: {
        activeCount() {
            return this.advertisements.filter(ad => ad.status === 'active').length;
        },
        inactiveCount() {
            return this.advertisements.filter(ad => ad.status === 'inactive').length;
        },
        activeStatusClass() {
            return 'inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-black bg-green-100 text-green-700 uppercase';
        },
        inactiveStatusClass() {
            return 'inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-black bg-gray-100 text-gray-700 uppercase';
        }
    },
    mounted() {
        this.fetchAdvertisements();
    },
    methods: {
        formatDate(value) {
            if (!value) return 'N/A';
            return value;
        },
        buttonClass(disabled) {
            return disabled ? 'px-4 py-2 bg-white border border-gray-200 rounded-xl font-bold hover:bg-gray-50 transition opacity-50 cursor-not-allowed' : 'px-4 py-2 bg-white border border-gray-200 rounded-xl font-bold hover:bg-gray-50 transition';
        },
        fetchAdvertisements(page = 1) {
            axios.get('/api/advertisements', {
                params: {
                    page,
                    search: this.search,
                    placement: this.filterPlacement,
                    status: this.filterStatus,
                }
            })
                .then(response => {
                    this.advertisements = response.data.data;
                    this.meta = response.data.meta || {};
                })
                .catch(error => {
                    Notification.error('Unable to load advertisements');
                    console.error(error);
                });
        },
        deleteAdvertisement(id) {
            if (!confirm('আপনি কি এই বিজ্ঞাপনটি মুছে ফেলতে চান?')) {
                return;
            }

            axios.delete(`/api/advertisements/${id}`)
                .then(() => {
                    Notification.success('Advertisement deleted successfully');
                    this.fetchAdvertisements(this.meta.current_page || 1);
                })
                .catch(error => {
                    Notification.error('Failed to delete advertisement');
                    console.error(error);
                });
        }
    }
};
</script>

<style scoped></style>
