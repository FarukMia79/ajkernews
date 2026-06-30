<template>
    <div class="p-2 md:p-4">
        <!-- ১. শিরোনাম এবং "নতুন ইউজার" বাটন -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">ইউজার ম্যানেজমেন্ট</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">ইউজার লিস্ট</span>
                </nav>
            </div>
            <router-link to="/admin/users/create"
                :class="currentUserRole !== 'admin' ? 'opacity-30 grayscale cursor-not-allowed pointer-events-none' : ''"
                class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-user-plus"></i> নতুন ইউজার যোগ করুন
            </router-link>
        </div>

        <!-- ২. ফিল্টার এবং সার্চ বার -->
        <div
            class="bg-white p-5 rounded-t-2xl border-x border-t border-gray-100 flex flex-col md:flex-row justify-between gap-4">
            <div class="relative w-full md:w-96">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input v-model="search" type="text" placeholder="নাম বা ইমেইল দিয়ে খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
            </div>
            <div class="flex gap-3">
                <select v-model="role"
                    class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                    <option value="">সব রোল (Roles)</option>
                    <option value="admin">অ্যাডমিন</option>
                    <option value="editor">এডিটর</option>
                    <option value="reporter">রিপোর্টার</option>
                </select>
            </div>
        </div>

        <!-- ৩. ইউজার টেবিল -->
        <div class="bg-white rounded-b-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ইউজার
                                প্রোফাইল</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">রোল (Role)
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">স্ট্যাটাস
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">যোগদানের
                                তারিখ</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <!-- ডামি ইউজার লুপ -->
                        <tr v-for="user in users" :key="user.id" class="hover:bg-blue-50/30 transition-colors group">
                            <!-- প্রোফাইল ইনফো -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <img :src="user.image || 'https://ui-avatars.com/api/?name=User+' + user.id + '&background=random'"
                                        class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
                                    <div>
                                        <p class="text-sm font-bold text-gray-800">{{ user.name }}</p>
                                        <p class="text-xs text-gray-500">{{ user.email }}</p>
                                    </div>
                                </div>
                            </td>
                            <!-- রোল ব্যাজ -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span v-if="user.role === 'admin'"
                                    class="px-3 py-1 rounded-lg text-[11px] font-bold bg-purple-100 text-purple-700">Admin</span>
                                <span v-else-if="user.role === 'editor'"
                                    class="px-3 py-1 rounded-lg text-[11px] font-bold bg-blue-100 text-blue-700">Editor</span>
                                <span v-else
                                    class="px-3 py-1 rounded-lg text-[11px] font-bold bg-teal-100 text-teal-700">Reporter</span>
                            </td>
                            <!-- স্ট্যাটাস -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span v-if="user.status === 'active'"
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> অ্যাক্টিভ
                                </span>
                                <span v-else
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-bold bg-red-100 text-red-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> নিষ্ক্রিয়
                                </span>
                            </td>
                            <!-- তারিখ -->
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 font-medium">
                                {{ user.created_at }}
                            </td>
                            <!-- অ্যাকশন বাটন -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div :class="currentUserRole !== 'admin' ? 'opacity-30 grayscale cursor-not-allowed pointer-events-none' : ''"
                                    class="flex justify-end gap-2">
                                    <router-link :to="{ name: 'adminEditUser', params: { id: user.id } }"
                                        class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                        title="এডিট">
                                        <i class="fa-solid fa-user-pen"></i>
                                    </router-link>
                                    <router-link :to="{ name: 'adminResetPassword', params: { id: user.id } }"
                                        class="p-2 text-gray-400 hover:text-orange-600 hover:bg-orange-50 rounded-lg transition"
                                        title="পাসওয়ার্ড রিসেট">
                                        <i class="fa-solid fa-key"></i>
                                    </router-link>
                                    <button @click="deleteUser(user.id)"
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

            <!-- ৪. প্যাজিনেশন -->
            <div
                class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">

                <!-- dynamic status text -->
                <span class="text-sm text-gray-500 font-medium" v-if="meta.total">
                    Total {{ meta.total }} users, showing {{ meta.from }}-{{ meta.to }}
                </span>

                <!-- pagination controls -->
                <div class="flex gap-2">
                    <!-- previous button -->
                    <button @click="allUsers(meta.current_page - 1)" :disabled="meta.current_page === 1"
                        :class="meta.current_page === 1 ? 'text-gray-300 cursor-not-allowed' : 'text-gray-700 hover:text-blue-600'"
                        class="p-2 px-4 bg-white border border-gray-200 rounded-xl font-bold transition shadow-sm">
                        Previous
                    </button>

                    <!-- next button -->
                    <button @click="allUsers(meta.current_page + 1)" :disabled="meta.current_page === meta.last_page"
                        :class="meta.current_page === meta.last_page ? 'text-gray-300 cursor-not-allowed' : 'text-gray-700 hover:text-blue-600'"
                        class="p-2 px-4 bg-white border border-gray-200 rounded-xl font-bold transition shadow-sm">
                        Next
                    </button>
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
            users: [],
            meta: {},
            isLoading: false,
            currentUserRole: AppStorage.getUser()?.role || '',
            search: '',
            role: ''
        }
    },
    mounted() {
        this.allUsers();
    },
    watch: {
        search() {
            this.allUsers(1);
        },
        role() {
            this.allUsers(1);
        }
    },
    methods: {
        allUsers(page = 1) {
            this.isLoading = true;
            axios.get(`/api/users`, {
                params: {
                    page: page,
                    search: this.search,
                    role: this.role
                }
            })
                .then(res => {
                    this.users = res.data.data;
                    this.meta = res.data.meta;
                })
                .finally(() => {
                    this.isLoading = false;
                });
        },
        deleteUser(id) {
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
                        text: "Your user has been deleted.",
                        icon: "success"
                    });
                    axios.delete('/api/users/' + id)
                        .then(() => {
                            this.users = this.users.filter(user => {
                                return user.id != id;
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

<style scoped></style>