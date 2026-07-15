<template>
    <div class="max-w-4xl mx-auto p-2 md:p-6 font-sans">
        <!-- page header and breadcrumb -->
        <div class="flex justify-between items-center mb-8 bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
            <div>
                <h2 class="text-2xl font-black text-gray-800 tracking-tight">নতুন জরিপ শুরু করুন</h2>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/polls" class="hover:text-blue-600 font-medium">জরিপ</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-bold">তৈরি করুন</span>
                </nav>
            </div>
            <router-link to="/admin/polls"
                class="p-2.5 bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                <i class="fa-solid fa-arrow-left"></i>
            </router-link>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <form @submit.prevent="submitForm" class="p-6 md:p-10 space-y-8">

                <!-- poll question -->
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-bold text-gray-700 ml-1">জরিপের প্রশ্ন <span
                            class="text-red-500">*</span></label>
                    <textarea rows="3" v-model="form.question"
                        placeholder="আপনার প্রশ্নটি এখানে লিখুন... উদা: আপনি কি মনে করেন বর্তমান বাজেট জনবান্ধব?"
                        class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all font-bold"></textarea>
                    <p v-if="errors.question" class="text-sm text-red-500">{{ errors.question[0] }}</p>
                </div>

                <!-- poll options -->
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <label class="text-sm font-bold text-gray-700 ml-1">ভোটের অপশনসমূহ</label>
                        <button type="button" @click="addOption"
                            class="text-sm font-bold text-blue-600 hover:text-blue-700 transition">+ নতুন অপশন</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-lg">
                        <div v-for="(option, index) in form.options" :key="index" class="relative group">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">{{ index + 1
                                }}.</span>
                            <input type="text" v-model="form.options[index]" :placeholder="`অপশন ${index + 1}`"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-10 pr-12 py-3 outline-none focus:bg-white focus:border-blue-500 transition-all">
                            <button v-if="form.options.length > 2" type="button" @click="removeOption(index)"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-red-600 transition">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                    <p v-if="errors.options" class="text-sm text-red-500">{{ errors.options[0] }}</p>
                </div>

                <!-- poll schedule -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">শুরুর তারিখ</label>
                        <input type="date" v-model="form.start_date"
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500">
                        <p v-if="errors.start_date" class="text-sm text-red-500">{{ errors.start_date[0] }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">শেষের তারিখ</label>
                        <input type="date" v-model="form.end_date"
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500">
                        <p v-if="errors.end_date" class="text-sm text-red-500">{{ errors.end_date[0] }}</p>
                    </div>
                </div>

                <!-- poll settings -->
                <div class="flex flex-col md:flex-row justify-between items-center gap-6 pt-6 border-t border-gray-50">
                    <div class="flex items-center gap-4 w-full md:w-auto">
                        <label class="text-sm font-bold text-gray-700">অবস্থা:</label>
                        <select v-model="form.status"
                            class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer text-lg">
                            <option value="active">সক্রিয় (Active)</option>
                            <option value="inactive">নিষ্ক্রিয় (Inactive)</option>
                        </select>
                    </div>

                    <div class="flex items-center gap-4 w-full md:w-auto">
                        <router-link to="/admin/polls"
                            class="flex-1 md:flex-none px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition text-center rounded-2xl border border-gray-200">
                            বাতিল
                        </router-link>
                        <button type="submit"
                            class="flex-1 md:flex-none bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-2xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane text-sm"></i> জরিপ পাবলিশ করুন
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</template>

<script>
import Notification from '../../../helpers/Notification';

export default {
    data() {
        return {
            form: {
                question: '',
                options: ['হ্যাঁ', 'না'],
                start_date: '',
                end_date: '',
                status: 'active',
            },
            errors: {},
        }
    },
    methods: {
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
        submitForm() {
            this.errors = {};

            if (this.form.options.length < 2) {
                Notification.error('Minimum 2 options required');
                return;
            }

            const formData = new FormData();
            formData.append('question', this.form.question);
            this.form.options.forEach((option, index) => {
                formData.append(`options[${index}]`, option);
            });
            formData.append('start_date', this.form.start_date);
            formData.append('end_date', this.form.end_date);
            formData.append('status', this.form.status);

            axios.post('/api/polls/store', formData)
                .then(() => {
                    Notification.success('Poll created successfully');
                    this.$router.push({ name: 'adminPolls' });
                })
                .catch(error => {
                    if (error.response && error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    } else {
                        Notification.error('Poll creation failed');
                    }
                });
        }
    }
}
</script>

<style scoped></style>
