<template>
    <div class="p-2 md:p-4 font-sans">
        <!-- page header and breadcrumb -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-square-poll-vertical text-green-500"></i> অনলাইন জরিপ ব্যবস্থাপনা
                </h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">জরিপ লিস্ট</span>
                </nav>
            </div>
            <router-link to="/admin/polls/create"
                class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-plus-circle"></i> নতুন জরিপ শুরু করুন
            </router-link>
        </div>

        <!-- poll statistics cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 text-lg">
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-blue-100 p-3 rounded-2xl text-blue-600"><i
                        class="fa-solid fa-fire-flame-curved text-xl"></i></div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">সক্রিয় জরিপ</p>
                    <p class="text-xl font-black text-gray-800">{{ activePollCount }}টি</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-purple-100 p-3 rounded-2xl text-purple-600"><i class="fa-solid fa-users text-xl"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">মোট ভোট</p>
                    <p class="text-xl font-black text-gray-800">{{ totalVotes }}</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4 text-lg">
                <div class="bg-green-100 p-3 rounded-2xl text-green-600"><i
                        class="fa-solid fa-circle-check text-xl"></i></div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">সম্পন্ন জরিপ</p>
                    <p class="text-xl font-black text-gray-800">{{ completedPollCount }}টি</p>
                </div>
            </div>
        </div>

        <!-- poll list table -->
        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden text-lg">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100 text-lg">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">জরিপের প্রশ্ন
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ফলাফল
                                (রিয়েল-টাইম)</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                                মোট ভোট</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                                অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr v-for="poll in polls" :key="poll.id" class="hover:bg-blue-50/20 transition-colors group">
                            <!-- প্রশ্ন -->
                            <td class="px-6 py-4 min-w-[300px]">
                                <p class="text-sm font-bold text-gray-800 leading-tight">{{ poll.question }}</p>
                                <p class="text-[10px] text-gray-400 mt-1 italic">
                                    শুরু: {{ poll.start_date || 'N/A' }} | শেষ: {{ poll.end_date || 'N/A' }}
                                </p>
                            </td>
                            <!-- progress bar (results) -->
                            <td class="px-6 py-4 min-w-[200px]">
                                <div class="space-y-2">
                                    <div v-for="option in poll.options" :key="option.label">
                                        <div class="flex justify-between text-[10px] font-bold mb-0.5">
                                            <span>{{ option.label }} ({{ calculateOptionPercentage(option.votes, poll.total_votes) }}%)</span>
                                        </div>
                                        <div class="w-full bg-gray-100 rounded-full h-1.5">
                                            <div class="bg-green-500 h-1.5 rounded-full"
                                                :style="{ width: calculateOptionPercentage(option.votes, poll.total_votes) + '%' }"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <!-- vote count -->
                            <td class="px-6 py-4 text-center">
                                <span class="text-sm font-black text-gray-700">{{ poll.total_votes || 0 }}</span>
                            </td>
                            <!-- status -->
                            <td class="px-6 py-4 text-center">
                                <span v-if="poll.status === 'active'"
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-black bg-green-100 text-green-700 uppercase">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> চলমান
                                </span>
                                <span v-else
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-black bg-gray-100 text-gray-400 uppercase">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> বন্ধ
                                </span>
                            </td>
                            <!-- action buttons -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end gap-2">
                                    <router-link
                                        :to="{ name: 'adminEditPoll', params: { id: poll.id } }"
                                        class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                        title="এডিট"><i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <button @click="toggleStatus(poll)"
                                        class="p-2 text-gray-400 hover:text-orange-500 hover:bg-orange-50 rounded-lg transition"
                                        :title="poll.status === 'active' ? 'বন্ধ করুন' : 'চালু করুন'">
                                        <i class="fa-solid" :class="poll.status === 'active' ? 'fa-stop-circle' : 'fa-play-circle'"></i>
                                    </button>
                                    <button @click="deletePoll(poll.id)"
                                        class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                        title="ডিলিট"><i class="fa-solid fa-trash-can"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- pagination -->
            <div
                class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">
                <span v-if="meta.total" class="text-sm text-gray-500 font-medium">মোট {{ meta.total }}টি জরিপের মধ্যে {{ meta.from }}-{{ meta.to }}টি দেখানো হচ্ছে</span>
                <div class="flex gap-2">
                    <button @click="fetchPolls(meta.current_page - 1)" :disabled="meta.current_page === 1" :class="meta.current_page === 1 ? 'opacity-50 cursor-not-allowed' : ''"
                        class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-700 hover:border-blue-500 hover:text-blue-600 font-bold transition flex items-center gap-2 text-sm">
                        <i class="fa-solid fa-chevron-left text-xs"></i> Previous
                    </button>
                    <button @click="fetchPolls(meta.current_page + 1)" :disabled="meta.current_page === meta.last_page" :class="meta.current_page === meta.last_page ? 'opacity-50 cursor-not-allowed' : ''"
                        class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-700 hover:border-blue-500 hover:text-blue-600 font-bold transition flex items-center gap-2 text-sm">
                        Next <i class="fa-solid fa-chevron-right text-xs"></i>
                    </button>
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
            polls: [],
            meta: {},
            search: '',
        }
    },
    mounted() {
        this.fetchPolls();
    },
    methods: {
        fetchPolls(page = 1) {
            axios.get('/api/polls', {
                params: {
                    page,
                    search: this.search,
                }
            })
                .then(response => {
                    this.polls = response.data.data || [];
                    this.meta = response.data.meta || {};
                })
                .catch(() => {
                    Notification.error('Unable to load polls');
                });
        },
        calculateOptionPercentage(votes, total) {
            if (!total) return 0;
            return Math.round((votes / total) * 100);
        },
        toggleStatus(poll) {
            const newStatus = poll.status === 'active' ? 'inactive' : 'active';
            axios.post(`/api/polls/update/${poll.id}`, {
                question: poll.question,
                options: poll.options.map(option => option.label),
                start_date: poll.start_date,
                end_date: poll.end_date,
                status: newStatus,
            })
                .then(() => {
                    Notification.success('Poll status updated');
                    this.fetchPolls(this.meta.current_page || 1);
                })
                .catch(() => {
                    Notification.error('Could not update poll status');
                });
        },
        deletePoll(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // TODO: Implement delete functionality
                    Swal.fire(
                        'Deleted!',
                        'Your poll has been deleted.',
                        'success'
                    )
                    axios.delete(`/api/polls/${id}`)
                        .then(() => {
                            Notification.success('Poll deleted successfully');
                            this.fetchPolls(this.meta.current_page || 1);
                        })
                        .catch(() => {
                            Notification.error('Failed to delete poll');
                        });
                }
            })
        }
    },
    computed: {
        activePollCount() {
            return this.polls.filter(poll => poll.status === 'active').length;
        },
        completedPollCount() {
            const today = new Date();
            return this.polls.filter(poll => {
                if (poll.status === 'inactive') return true;
                if (poll.end_date) {
                    return new Date(poll.end_date) < today;
                }
                return false;
            }).length;
        },
        totalVotes() {
            return this.polls.reduce((sum, poll) => sum + (poll.total_votes || 0), 0);
        }
    }
}
</script>

<style scoped></style>
