<template>
    <div class="max-w-5xl mx-auto p-2 md:p-6 font-sans">
        <div class="flex justify-between items-center mb-8 bg-white p-5 rounded-2xl shadow-sm border border-orange-100">
            <div>
                <h2 class="text-2xl font-black text-gray-800 tracking-tight">জরিপ সংশোধন ও ফলাফল</h2>
                <p class="text-xs text-orange-500 font-bold uppercase mt-1 italic">ID: #POLL-{{ pollId }}</p>
            </div>
            <router-link to="/admin/polls"
                class="px-5 py-2.5 bg-orange-50 text-orange-600 rounded-xl font-bold hover:bg-orange-100 transition flex items-center gap-2 shadow-sm">
                <i class="fa-solid fa-xmark"></i> এডিট বন্ধ করুন
            </router-link>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <form @submit.prevent="updatePoll" class="p-6 md:p-10 space-y-8">

                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">জরিপের প্রশ্ন <span class="text-red-500">*</span></label>
                            <textarea rows="3" v-model="form.question"
                                placeholder="আপনার প্রশ্নটি এখানে লিখুন... উদা: আপনি কি মনে করেন বর্তমান বাজেট জনবান্ধব?"
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all font-bold"></textarea>
                            <p v-if="errors.question" class="text-sm text-red-500">{{ errors.question[0] }}</p>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <label class="text-sm font-bold text-gray-700 ml-1">ভোটের অপশনসমূহ</label>
                                <button type="button" @click="addOption"
                                    class="text-sm font-bold text-orange-600 hover:text-orange-700 transition">+ নতুন অপশন</button>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-lg">
                                <div v-for="(option, index) in form.options" :key="index" class="relative group">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">{{ index + 1 }}.</span>
                                    <input type="text" v-model="form.options[index]"
                                        :placeholder="`অপশন ${index + 1}`"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-10 pr-12 py-3 outline-none focus:bg-white focus:border-orange-500 transition-all">
                                    <button v-if="form.options.length > 2" type="button" @click="removeOption(index)"
                                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-red-600 transition">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </div>
                            <p v-if="errors.options" class="text-sm text-red-500">{{ errors.options[0] }}</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-gray-700 ml-1">শুরুর তারিখ</label>
                                <input type="date" v-model="form.start_date"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-orange-500">
                                <p v-if="errors.start_date" class="text-sm text-red-500">{{ errors.start_date[0] }}</p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-gray-700 ml-1">শেষের তারিখ</label>
                                <input type="date" v-model="form.end_date"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-orange-500">
                                <p v-if="errors.end_date" class="text-sm text-red-500">{{ errors.end_date[0] }}</p>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row justify-between items-center gap-6 pt-6 border-t border-gray-50">
                            <div class="flex items-center gap-4 w-full md:w-auto">
                                <label class="text-sm font-bold text-gray-700">অবস্থা:</label>
                                <select v-model="form.status"
                                    class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-orange-500 cursor-pointer text-lg">
                                    <option value="active">সক্রিয় (Active)</option>
                                    <option value="inactive">নিষ্ক্রিয় (Inactive)</option>
                                </select>
                            </div>

                            <div class="flex items-center gap-4 w-full md:w-auto">
                                <router-link to="/admin/polls"
                                    class="flex-1 md:flex-none px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition text-center rounded-2xl border border-gray-200">
                                    বাতিল
                                </router-link>
                                <button type="submit"
                                    class="flex-1 md:flex-none bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-2xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-paper-plane text-sm"></i> আপডেট করুন
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100">
                    <h3 class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-3">
                        <i class="fa-solid fa-chart-pie text-blue-500"></i> বর্তমান ভোটের চিত্র
                    </h3>

                    <div v-if="pollData" class="space-y-6">
                        <div v-for="option in pollData.options" :key="option.label">
                            <div class="flex justify-between text-xs font-bold mb-1">
                                <span class="text-gray-600">{{ option.label }} ({{ option.votes }} ভোট)</span>
                                <span class="text-green-600">{{ calculateOptionPercentage(option.votes, pollData.total_votes) }}%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2 text-lg">
                                <div class="bg-green-500 h-2 rounded-full"
                                    :style="{ width: calculateOptionPercentage(option.votes, pollData.total_votes) + '%' }"></div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-50 text-center">
                            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">সর্বমোট ভোট:</p>
                            <p class="text-2xl font-black text-blue-600">{{ pollData.total_votes }}</p>
                        </div>
                    </div>

                    <div v-else class="text-sm text-gray-500">Loading poll results...</div>
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
            pollId: this.$route.params.id,
            form: {
                question: '',
                options: [],
                start_date: '',
                end_date: '',
                status: 'active',
            },
            pollData: null,
            errors: {}
        }
    },
    mounted() {
        this.fetchPoll();
    },
    methods: {
        fetchPoll() {
            axios.get(`/api/polls/${this.pollId}`)
                .then(response => {
                    const poll = response.data.data;
                    this.pollData = poll;
                    this.form.question = poll.question;
                    this.form.options = poll.options.map(option => option.label);
                    this.form.start_date = poll.start_date || '';
                    this.form.end_date = poll.end_date || '';
                    this.form.status = poll.status;
                })
                .catch(() => {
                    Notification.error('Failed to load poll details');
                });
        },
        addOption() {
            if (this.form.options.length >= 8) {
                Notification.error('Maximum 8 options allowed');
                return;
            }
            this.form.options.push('');
        },
        removeOption(index) {
            this.form.options.splice(index, 1);
        },
        updatePoll() {
            this.errors = {};
            if (this.form.options.length < 2) {
                Notification.error('At least 2 options are required.');
                return;
            }

            axios.post(`/api/polls/update/${this.pollId}`, {
                question: this.form.question,
                options: this.form.options,
                start_date: this.form.start_date,
                end_date: this.form.end_date,
                status: this.form.status,
            })
                .then(() => {
                    Notification.success('Poll updated successfully');
                    this.$router.push({ name: 'adminPolls' });
                })
                .catch(error => {
                    if (error.response && error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    } else {
                        Notification.error('Poll update failed');
                    }
                });
        },
        calculateOptionPercentage(votes, total) {
            if (!total) return 0;
            return Math.round((votes / total) * 100);
        }
    }
}
</script>

<style scoped></style>
