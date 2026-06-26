<template>
    <div class="max-w-5xl mx-auto p-2 md:p-6 font-sans">
        <!-- হেডার ও ব্রেডক্রাম্ব -->
        <div class="flex justify-between items-center mb-8 bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
            <div>
                <h2 class="text-2xl font-black text-gray-800 tracking-tight">নতুন বিজ্ঞাপন যোগ করুন</h2>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/advertisements" class="hover:text-blue-600 font-medium">বিজ্ঞাপন</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-bold">তৈরি করুন</span>
                </nav>
            </div>
            <router-link to="/admin/advertisements" class="p-2.5 bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                <i class="fa-solid fa-arrow-left"></i>
            </router-link>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- বাম পাশ: মেইন ফর্ম (70%) -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <form @submit.prevent class="p-6 md:p-10 space-y-6">
                        
                        <!-- ক্লায়েন্ট বা বিজ্ঞাপনের নাম -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">বিজ্ঞাপন দাতা / ক্লায়েন্টের নাম <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="উদা: গ্রামীণফোন বা নেসলে" 
                                   class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all text-lg">
                        </div>

                        <!-- রিডাইরেক্ট লিঙ্ক (URL) -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">বিজ্ঞাপনের লিঙ্ক (Target URL)</label>
                            <input type="url" placeholder="https://example.com" 
                                   class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all font-mono text-sm">
                        </div>

                        <!-- মেয়াদকাল (Start & End Date) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2 text-lg">
                                <label class="text-sm font-bold text-gray-700 ml-1">শুরুর তারিখ</label>
                                <input type="date" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="flex flex-col gap-2 text-lg">
                                <label class="text-sm font-bold text-gray-700 ml-1">শেষের তারিখ</label>
                                <input type="date" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>

                        <!-- পজিশন বা প্লেসমেন্ট -->
                        <div class="flex flex-col gap-2 text-lg">
                            <label class="text-sm font-bold text-gray-700 ml-1">বিজ্ঞাপনের পজিশন নির্বাচন করুন</label>
                            <select class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                                <option value="header">হেডার ব্যানার (৯৭০ x ৯০)</option>
                                <option value="sidebar">সাইডবার (৩০০ x ২৫০)</option>
                                <option value="content_top">নিউজের ওপরে (৭২৮ x ৯০)</option>
                                <option value="content_bottom">নিউজের নিচে (৭২৮ x ৯০)</option>
                                <option value="popup">পপ-আপ বিজ্ঞাপন</option>
                            </select>
                        </div>

                    </form>
                </div>
            </div>

            <!-- ডান পাশ: ইমেজ আপলোড ও প্রিভিউ (30%) -->
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-3">
                        <i class="fa-solid fa-image text-green-500"></i> ব্যানার ইমেজ
                    </h3>
                    
                    <!-- ইমেজ আপলোড এরিয়া -->
                    <div class="relative group border-2 border-dashed border-gray-200 rounded-2xl p-6 text-center hover:border-blue-400 hover:bg-blue-50 transition-all cursor-pointer">
                        <input type="file" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full">
                        <div class="space-y-2">
                            <i class="fa-solid fa-cloud-arrow-up text-3xl text-gray-300 group-hover:text-blue-500 transition-all"></i>
                            <p class="text-xs font-bold text-gray-500">ছবি আপলোড করুন</p>
                        </div>
                    </div>

                    <!-- প্রিভিউ বক্স -->
                    <div class="mt-6">
                        <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-3">লাইভ প্রিভিউ:</p>
                        <div class="w-full h-32 bg-gray-50 rounded-xl border border-gray-100 flex items-center justify-center overflow-hidden">
                            <span class="text-gray-300 text-xs italic">কোনো ছবি নেই</span>
                            <!-- <img src="..." class="w-full h-full object-contain"> -->
                        </div>
                    </div>

                    <div class="mt-8 space-y-3">
                        <button class="w-full bg-[#003557] hover:bg-[#004a7c] text-white py-3.5 rounded-2xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-check-circle"></i> বিজ্ঞাপন সেভ করুন
                        </button>
                        <button class="w-full py-3 text-gray-500 font-bold hover:text-gray-800 transition">রিসেট করুন</button>
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

<style scoped>
</style>

