<template>
    <div class="p-2 md:p-6 max-w-5xl mx-auto font-sans">
        <!-- ১. হেডার ও অ্যাকশন বাটন -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mb-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/messages" class="hover:text-blue-600">ইনবক্স</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">বার্তা পড়ুন</span>
                </nav>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">পাঠকের বার্তা</h1>
            </div>
            <div class="flex gap-3">
                <button
                    class="px-5 py-2.5 bg-white border border-gray-200 rounded-xl font-bold text-gray-600 hover:bg-gray-50 transition flex items-center gap-2 shadow-sm">
                    <i class="fa-solid fa-envelope-open"></i> অপঠিত হিসেবে রাখুন
                </button>
                <router-link to="/admin/messages"
                    class="px-5 py-2.5 bg-[#003557] text-white rounded-xl font-bold hover:bg-[#004a7c] transition flex items-center gap-2 shadow-lg">
                    <i class="fa-solid fa-arrow-left"></i> ইনবক্সে ফিরে যান
                </router-link>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- ২. বাম পাশের মূল বার্তা (70%) -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <!-- মেসেজ সাবজেক্ট -->
                    <div class="bg-[#004a7c] p-6 text-white text-lg font-bold flex items-center gap-3">
                        <i class="fa-solid fa-quote-left opacity-50"></i>
                        বিজ্ঞাপন বিষয়ক বিশেষ প্রস্তাবনা
                    </div>

                    <!-- মেসেজ বডি -->
                    <div class="p-6 md:p-10">
                        <div class="prose max-w-none text-gray-700 leading-relaxed text-lg italic">
                            "আসসালামু আলাইকুম। আমি আপনাদের নিউজ পোর্টালটি নিয়মিত পড়ি। আপনাদের কন্টেন্ট অনেক ভালো লাগে।
                            আমি আমার নতুন ই-কমার্স সাইটের জন্য আপনাদের এখানে একটি ব্যানার বিজ্ঞাপন দিতে চাই। বিজ্ঞাপনের
                            রেট এবং পজিশন সম্পর্কে যদি বিস্তারিত জানাতেন তবে উপকৃত হতাম। ধন্যবাদ।"
                        </div>
                    </div>

                    <!-- কুইক রিপ্লাই (প্রফেশনাল ফিডব্যাক) -->
                    <div class="bg-gray-50 p-6 border-t border-gray-100">
                        <label class="text-sm font-bold text-gray-600 mb-3 block italic">রিপ্লাই দিন (প্রেরকের ইমেইলে
                            যাবে)</label>
                        <textarea rows="4"
                            class="w-full p-4 bg-white border border-gray-200 rounded-2xl outline-none focus:ring-4 focus:ring-purple-500/10 focus:border-purple-500 transition-all resize-none"
                            placeholder="আপনার উত্তর এখানে লিখুন..."></textarea>
                        <div class="flex justify-end mt-4">
                            <button
                                class="bg-[#003557] hover:bg-[#004a7c] text-white px-8 py-3 rounded-xl font-bold shadow-lg transition-all transform active:scale-95 flex items-center gap-2">
                                <i class="fa-solid fa-paper-plane text-sm"></i> উত্তর পাঠান
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ৩. ডান পাশে প্রেরকের তথ্য (30%) -->
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-3">
                        <i class="fa-solid fa-user-circle text-purple-500"></i> প্রেরকের তথ্য
                    </h3>
                    <div class="space-y-5">
                        <div class="flex flex-col">
                            <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">নাম</span>
                            <span class="text-sm font-black text-gray-800">রাকিব আহমেদ</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">ইমেইল</span>
                            <span class="text-sm font-bold text-blue-600 break-all">rakib@gmail.com</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">মোবাইল</span>
                            <span class="text-sm font-bold text-gray-800">০১৭০০-০০০০০০</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">সময়</span>
                            <span class="text-sm font-bold text-gray-600">১২ জুন ২০২৪, ১০:৩০ AM</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">আইপি
                                অ্যাড্রেস</span>
                            <span
                                class="text-xs font-mono bg-gray-100 p-1.5 rounded border border-gray-200 text-gray-500">192.168.1.45</span>
                        </div>
                    </div>

                    <button
                        class="w-full mt-8 py-3 border border-red-100 text-red-500 font-bold rounded-xl hover:bg-red-50 transition-colors flex items-center justify-center gap-2 text-sm">
                        <i class="fa-solid fa-trash-can"></i> মেসেজটি ডিলিট করুন
                    </button>
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