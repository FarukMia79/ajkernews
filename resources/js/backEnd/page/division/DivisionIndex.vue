<template>
    <div class="p-2 md:p-4">
        <!-- title and add new button -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">বিভাগ তালিকা</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">বিভাগ তালিকা</span>
                </nav>
            </div>
            <router-link to="/admin/divisions/create"
                :class="currentUserRole !== 'admin' ? 'opacity-30 grayscale cursor-not-allowed pointer-events-none' : ''"
                class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-plus"></i> নতুন বিভাগ
            </router-link>
        </div>

        <!-- filter and search bar -->
        <div
            class="bg-white p-4 rounded-t-2xl border-x border-t border-gray-100 flex flex-col md:flex-row justify-between gap-4">
            <div class="relative w-full md:w-80">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input v-model="search" type="text" placeholder="ক্যাটাগরি খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
            </div>
            <div class="flex gap-2">
                <button
                    class="px-4 py-2 border border-gray-200 rounded-xl text-gray-600 hover:bg-gray-50 transition flex items-center gap-2 font-medium">
                    <i class="fa-solid fa-filter text-sm"></i> ফিল্টার
                </button>
            </div>
        </div>

        <!-- category table -->
        <div class="bg-white rounded-b-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">আইডি</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">বিভাগ নাম
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">স্লাগ (URL)
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <!-- data loop -->
                        <tr v-for="(division, index) in divisions" :key="division.id"
                            class="hover:bg-blue-50/30 transition-colors group">
                            <td class="px-6 py-4 text-sm text-gray-600 font-medium">#{{ index + 1 }}</td>
                            <td class="px-6 py-4">
                                <span class="text-gray-800 font-bold group-hover:text-blue-600 transition-colors">{{
                                    division.name }}</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ division.slug }}</td>
                            <td class="px-6 py-4">
                                <!-- active badge -->
                                <span v-if="division.status === 'active'"
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Active
                                </span>
                                <!-- inactive badge -->
                                <span v-else
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> Inactive
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div :class="currentUserRole !== 'admin' ? 'opacity-30 grayscale cursor-not-allowed pointer-events-none' : ''"
                                    class="flex justify-end gap-2">
                                    <router-link :to="{ name: 'adminEditDivision', params: { id: division.id } }"
                                        class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                        title="এডিট করুন">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </router-link>
                                    <button @click="deleteDivision(division.id)"
                                        class="p-2 text-red-600 cursor-pointer hover:bg-red-50 rounded-lg transition"
                                        title="ডিলিট করুন">
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
                <span v-if="meta.total" class="text-sm text-gray-500 font-medium">মোট {{ meta.total }}টি ক্যাটাগরির মধ্যে {{ meta.from }}-{{ meta.to }}টি দেখানো হচ্ছে</span>
                <div class="flex gap-2">
                    <button @click="allDivisions(meta.current_page - 1)" :disabled="meta.current_page === 1" :class="meta.current_page === 1 ? 'px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-400 font-bold transition text-sm' : 'px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-700 hover:text-blue-600 font-bold transition text-sm'">Previous</button>
                    <button @click="allDivisions(meta.current_page + 1)" :disabled="meta.current_page === meta.last_page" :class="meta.current_page === meta.last_page ? 'px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-400 font-bold transition text-sm' : 'px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-700 hover:text-blue-600 font-bold transition text-sm'">Next</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AppStorage from '../../../helpers/AppStorage';
export default {
    data() {
        return {
            divisions: [],
            meta: {},
            search: '',
            currentUserRole: AppStorage.getUser()?.role || '',

        }
    },
    watch: {
        search() {
            this.allDivisions(1);
        }
    },
    mounted() {
        this.allDivisions();
    },
    methods: {
        allDivisions(page = 1) {
            axios.get('/api/division', {
                params: {
                    page: page,
                    search: this.search
                }
            })
                .then(response => {
                    this.divisions = response.data.data;
                    this.meta = response.data.meta;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        deleteDivision(id) {
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
                        text: "Your division has been deleted.",
                        icon: "success"
                    });
                    axios.delete('/api/division/' + id)
                        .then(() => {
                            this.divisions = this.divisions.filter(division => {
                                return division.id != id;
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
.overflow-x-auto {
    scrollbar-width: thin;
}
</style>