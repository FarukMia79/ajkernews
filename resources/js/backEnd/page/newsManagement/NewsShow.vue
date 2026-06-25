<template>
    <div class="p-2 md:p-6 max-w-6xl mx-auto">
        <!-- ১. হেডার ও অ্যাকশন বাটন -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mb-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/news" class="hover:text-blue-600">সব খবর</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">বিস্তারিত দেখুন</span>
                </nav>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">খবরের বিস্তারিত প্রিভিউ</h1>
            </div>
            <div class="flex gap-3">
                <router-link :to="{ name: 'adminEditNews', params: {id: 1}}" class="px-5 py-2.5 bg-white border border-gray-200 rounded-xl font-bold text-gray-600 hover:bg-gray-50 transition flex items-center gap-2">
                    <i class="fa-solid fa-pen-to-square"></i> এডিট করুন
                </router-link>
                <router-link to="/admin/news" class="px-5 py-2.5 bg-gray-800 text-white rounded-xl font-bold hover:bg-gray-900 transition flex items-center gap-2">
                    <i class="fa-solid fa-arrow-left"></i> তালিকায় ফিরে যান
                </router-link>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- ২. বাম পাশে খবরের মূল অংশ (70%) -->
            <div class="w-full lg:w-2/3 space-y-6">
                <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <!-- ফিচার ইমেজ -->
                    <div class="relative h-64 md:h-96 w-full overflow-hidden">
                        <img src="../../../../../public/uploads/post/parlament-sm-20171120165706.jpg" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="px-4 py-1.5 bg-blue-600 text-white text-xs font-bold rounded-full shadow-lg">জাতীয়</span>
                        </div>
                    </div>

                    <!-- খবরের কন্টেন্ট -->
                    <div class="p-6 md:p-10">
                        <h2 class="text-2xl md:text-4xl font-black text-gray-900 leading-tight mb-6">
                            বাংলাদেশে করোনায় আক্রান্তের সংখ্যা ৫ লাখ ছাড়িয়েছে : স্বাস্থ্য অধিদপ্তরের রিপোর্ট
                        </h2>

                        <div class="flex items-center gap-4 mb-8 pb-6 border-b border-gray-100 text-gray-500 text-sm">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-user-nib"></i>
                                <span class="font-bold text-gray-700">ফারুক আহমেদ</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-calendar-day"></i>
                                <span>১২ জুন ২০২৪</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-eye"></i>
                                <span>ভিউ: ১২,৪৫০</span>
                            </div>
                        </div>

                        <!-- মূল খবর (Content) -->
                        <div class="prose max-w-none text-gray-700 leading-relaxed text-lg space-y-6">
                            <p>
                                এখানে খবরের মূল বিস্তারিত অংশটি দেখা যাবে। লারাভেল ব্যাকএন্ড থেকে আসা ডাইনামিক ডেটা এখানে সুন্দরভাবে ফরম্যাট হয়ে থাকবে। একটি প্রফেশনাল প্যানেলে অ্যাডমিন যেন নিউজটি পড়ার সময় কোনো অস্বস্তি বোধ না করেন, সেটি মাথায় রেখে ফন্ট সাইজ এবং লাইন হাইট ঠিক করা হয়েছে।
                            </p>
                            <p>
                                এই সেকশনটিতে খবরটির গুরুত্ব এবং প্রয়োজনীয় তথ্যগুলো ফুটে উঠবে। এটিই হবে আপনার সাইটের মূল শক্তি।
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ৩. ডান পাশে তথ্য ও সেটিংস সারাংশ (30%) -->
            <div class="w-full lg:w-1/3 space-y-6">
                <!-- স্ট্যাটাস কার্ড -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center gap-2 border-b pb-2">
                        <i class="fa-solid fa-circle-info text-blue-500"></i> পাবলিশ তথ্য
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500">অবস্থা (Status):</span>
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full font-bold text-xs">পাবলিশড</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500">প্রথম প্রকাশ:</span>
                            <span class="font-medium text-gray-800">১২ জুন ২০২৪</span>
                        </div>
                        <div class="flex justify-between items-center text-sm text-lg">
                            <span class="text-gray-500">সর্বশেষ আপডেট:</span>
                            <span class="font-medium text-gray-800">১৩ জুন ২০২৪</span>
                        </div>
                    </div>
                </div>

                <!-- এসইও (SEO) ইনফো কার্ড -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center gap-2 border-b pb-2">
                        <i class="fa-solid fa-earth-americas text-green-500"></i> এসইও তথ্য (SEO)
                    </h3>
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-gray-400 uppercase">লিঙ্ক (Slug)</label>
                            <p class="text-sm text-blue-600 break-all bg-gray-50 p-2 rounded border border-dashed border-gray-200">corona-cases-cross-5-lakh-in-bangladesh</p>
                        </div>
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-gray-400 uppercase">মেটা বর্ণনা</label>
                            <p class="text-sm text-gray-600 bg-gray-50 p-2 rounded italic">দেশে করোনা পরিস্থিতি নিয়ে স্বাস্থ্য অধিদপ্তরের দেওয়া সর্বশেষ তথ্যের সারসংক্ষেপ এখানে দেখা যাচ্ছে...</p>
                        </div>
                    </div>
                </div>

                <!-- ট্যাগ কার্ড -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-4">ট্যাগসমূহ</h3>
                    <div class="flex flex-wrap gap-2 text-lg">
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium border border-gray-200">#করোনা</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium border border-gray-200">#স্বাস্থ্য</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium border border-gray-200">#বাংলাদেশ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
.prose p {
    margin-bottom: 1.5rem;
}
</style>