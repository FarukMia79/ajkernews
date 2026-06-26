<template>
    <div class="max-w-5xl mx-auto p-2 md:p-6 font-sans">
        <!-- হেডার (Orange Theme for Edit) -->
        <div class="flex justify-between items-center mb-8 bg-white p-5 rounded-2xl shadow-sm border border-orange-100">
            <div>
                <h2 class="text-2xl font-black text-gray-800 tracking-tight">জরিপ সংশোধন ও ফলাফল</h2>
                <p class="text-xs text-orange-500 font-bold uppercase mt-1 italic">ID: #POLL-778</p>
            </div>
            <router-link to="/admin/polls"
                class="px-5 py-2.5 bg-orange-50 text-orange-600 rounded-xl font-bold hover:bg-orange-100 transition flex items-center gap-2 shadow-sm">
                <i class="fa-solid fa-xmark"></i> এডিট বন্ধ করুন
            </router-link>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- বাম পাশে ফর্ম (Create Page এর মতোই হবে) -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <form @submit.prevent class="p-6 md:p-10 space-y-8 text-lg">

                        <!-- জরিপের প্রশ্ন -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">জরিপের প্রশ্ন (বাংলায়) <span
                                    class="text-red-500">*</span></label>
                            <textarea rows="3"
                                placeholder="আপনার প্রশ্নটি এখানে লিখুন... উদা: আপনি কি মনে করেন বর্তমান বাজেট জনবান্ধব?"
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all font-bold"></textarea>
                        </div>

                        <!-- উত্তরের অপশনসমূহ (প্রফেশনাল রিপিটার ডিজাইন) -->
                        <div class="space-y-4">
                            <label class="text-sm font-bold text-gray-700 ml-1">ভোটের অপশনসমূহ</label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-lg">
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">১.</span>
                                    <input type="text" value="হ্যাঁ"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-10 pr-4 py-3 outline-none focus:bg-white focus:border-orange-500 transition-all">
                                </div>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">২.</span>
                                    <input type="text" value="না"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-10 pr-4 py-3 outline-none focus:bg-white focus:border-orange-500 transition-all">
                                </div>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">৩.</span>
                                    <input type="text" value="মন্তব্য নেই"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-10 pr-4 py-3 outline-none focus:bg-white focus:border-orange-500 transition-all">
                                </div>
                                <!-- নতুন অপশন যোগ করার বাটন -->
                                <button type="button"
                                    class="border-2 border-dashed border-gray-200 rounded-xl py-3 text-gray-400 hover:text-orange-500 hover:border-orange-400 transition-all flex items-center justify-center gap-2 text-sm font-bold">
                                    <i class="fa-solid fa-plus-circle"></i> আরও অপশন যোগ করুন
                                </button>
                            </div>
                        </div>

                        <!-- সময়সীমা (Scheduling) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-gray-700 ml-1 text-lg">শুরুর তারিখ</label>
                                <input type="date"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-orange-500">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-gray-700 ml-1 text-lg">শেষের তারিখ</label>
                                <input type="date"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-orange-500">
                            </div>
                        </div>

                        <!-- সেটিংস ও বাটন -->
                        <div
                            class="flex flex-col md:flex-row justify-between items-center gap-6 pt-6 border-t border-gray-50">
                            <div class="flex items-center gap-4">
                                <label class="text-sm font-bold text-gray-700">অবস্থা:</label>
                                <select
                                    class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-orange-500 cursor-pointer text-lg">
                                    <option value="active">সক্রিয় (Active)</option>
                                    <option value="inactive">নিষ্ক্রিয় (Inactive)</option>
                                </select>
                            </div>

                            <div class="flex items-center gap-4 w-full md:w-auto">
                                <button type="button"
                                    class="flex-1 md:flex-none px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition">বাতিল</button>
                                <button type="submit"
                                    class="flex-1 md:flex-none bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-2xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-paper-plane text-sm"></i> পাবলিশ
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <!-- ডান পাশে বর্তমান ফলাফল (এডিট পেজের জন্য স্পেশাল) -->
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-3 text-lg">
                        <i class="fa-solid fa-chart-pie text-blue-500"></i> বর্তমান ভোটের চিত্র
                    </h3>
                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-2">
                                <span class="text-gray-600">হ্যাঁ (৮,৫০০ ভোট)</span>
                                <span class="text-green-600">৬৫%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2 text-lg">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-2">
                                <span class="text-gray-600">না (৩,২০০ ভোট)</span>
                                <span class="text-red-600">৩০%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2 text-lg">
                                <div class="bg-red-500 h-2 rounded-full" style="width: 30%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-2">
                                <span class="text-gray-600">মন্তব্য নেই (৫০০ ভোট)</span>
                                <span class="text-gray-400">৫%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2 text-lg">
                                <div class="bg-gray-300 h-2 rounded-full" style="width: 5%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-50 text-center">
                        <p class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">সর্বমোট ভোট:</p>
                        <p class="text-2xl font-black text-blue-600">১২,২০০</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    //
}
</script>

<style scoped></style>