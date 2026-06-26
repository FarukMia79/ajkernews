<template>
    <div class="p-2 md:p-6 font-sans max-w-6xl mx-auto text-lg">
        <!-- ১. হেডার সেকশন -->
        <div class="mb-8">
            <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                <i class="fa-solid fa-magnifying-glass-chart text-green-600"></i> এসইও (SEO) কনফিগারেশন
            </h1>
            <p class="text-sm text-gray-500 mt-1 italic">সার্চ ইঞ্জিন এবং সোশ্যাল মিডিয়ায় আপনার সাইটকে সঠিকভাবে উপস্থাপন
                করুন।</p>
        </div>

        <form @submit.prevent class="space-y-8">

            <!-- ২. গুগল সার্চ প্রিভিউ (একটি অনন্য প্রফেশনাল ফিচার) -->
            <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-8 py-4 border-b border-gray-100">
                    <h3 class="font-bold text-gray-700 flex items-center gap-2">
                        <i class="fa-brands fa-google text-blue-500"></i> গুগল সার্চ প্রিভিউ
                    </h3>
                </div>
                <div class="p-8">
                    <div class="max-w-xl bg-white border border-gray-200 p-4 rounded-xl shadow-sm">
                        <p class="text-[#1a0dab] text-xl font-medium mb-1 hover:underline cursor-pointer">আজকের নিউজ |
                            সত্যের সন্ধানে অবিচল</p>
                        <p class="text-[#006621] text-sm mb-1 italic">https://ajkernews.com</p>
                        <p class="text-[#4d5156] text-sm leading-relaxed">বাংলাদেশের সর্বশেষ সংবাদ, রাজনীতি, অর্থনীতি,
                            খেলাধুলা এবং বিনোদনের সব খবর সবার আগে পেতে আজকের নিউজের সাথেই থাকুন।</p>
                    </div>
                    <p class="text-[11px] text-gray-400 mt-4 italic">* এটি একটি ডামি প্রিভিউ, নিচের তথ্যগুলো পরিবর্তন
                        করলে এটি আপডেট হবে।</p>
                </div>
            </div>

            <!-- ৩. জেনারেল এসইও মেটা ট্যাদস -->
            <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-8 py-4 border-b border-gray-100">
                    <h3 class="font-bold text-gray-700 flex items-center gap-2">
                        <i class="fa-solid fa-code text-indigo-500"></i> মেটা ইনফরমেশন
                    </h3>
                </div>
                <div class="p-8 space-y-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-600 ml-1 uppercase tracking-wider text-xs">মেটা টাইটেল
                            (Meta Title)</label>
                        <input type="text" value="আজকের নিউজ | সত্যের সন্ধানে অবিচল"
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all font-bold">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-600 ml-1 uppercase tracking-wider text-xs">মেটা
                            ডেসক্রিপশন (Meta Description)</label>
                        <textarea rows="3"
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:border-blue-500 transition-all">বাংলাদেশের সর্বশেষ সংবাদ, রাজনীতি, অর্থনীতি, খেলাধুলা এবং বিনোদনের সব খবর সবার আগে পেতে আজকের নিউজের সাথেই থাকুন।</textarea>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-600 ml-1 uppercase tracking-wider text-xs">মেটা
                            কি-ওয়ার্ডস (Keywords)</label>
                        <input type="text" placeholder="news, bangladesh, politics, sports"
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:border-blue-500 transition-all">
                    </div>
                </div>
            </div>

            <!-- ৪. সোশ্যাল মিডিয়া প্রিভিউ (Open Graph) -->
            <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-8 py-4 border-b border-gray-100">
                    <h3 class="font-bold text-gray-700 flex items-center gap-2">
                        <i class="fa-solid fa-share-nodes text-pink-500"></i> সোশ্যাল শেয়ার সেটিংস (Open Graph)
                    </h3>
                </div>
                <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="space-y-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-600 ml-1">শেয়ার টাইটেল</label>
                            <input type="text" placeholder="সোশ্যাল মিডিয়ায় যা দেখাবে"
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:border-blue-500 transition-all">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-600 ml-1">শেয়ার ছবি (OG Image)</label>
                            <div
                                class="relative group border-2 border-dashed border-gray-200 rounded-2xl p-4 text-center hover:border-blue-400 transition cursor-pointer">
                                <i class="fa-solid fa-cloud-arrow-up text-2xl text-gray-300"></i>
                                <p class="text-[10px] font-bold text-gray-400 mt-1 italic">১২০০ x ৬৩০ পিক্সেল আদর্শ</p>
                            </div>
                        </div>
                    </div>
                    <!-- ফেসবুক প্রিভিউ মকআপ -->
                    <div class="bg-gray-100 rounded-2xl p-4 border border-gray-200">
                        <p class="text-[10px] font-bold text-gray-400 uppercase mb-3 tracking-widest">ফেসবুক প্রিভিউ</p>
                        <div class="bg-white border border-gray-300 rounded overflow-hidden">
                            <div class="bg-gray-200 h-32 flex items-center justify-center">
                                <i class="fa-solid fa-image text-gray-400 text-3xl"></i>
                            </div>
                            <div class="p-2">
                                <p class="text-[10px] text-gray-500 uppercase">AJKERNEWS.COM</p>
                                <p class="text-xs font-bold text-gray-800 line-clamp-1">শেয়ার টাইটেল এখানে দেখাবে</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ৫. ওয়েবমাস্টার ও অ্যানালিটিক্স টুলস -->
            <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-8 py-4 border-b border-gray-100">
                    <h3 class="font-bold text-gray-700 flex items-center gap-2">
                        <i class="fa-solid fa-chart-line text-blue-500"></i> ওয়েবমাস্টার ও অ্যানালিটিক্স
                    </h3>
                </div>
                <div class="p-8 space-y-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-600 ml-1">Google Analytics ID</label>
                        <input type="text" placeholder="UA-XXXXXXXXX-X or G-XXXXXXXX"
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:border-blue-500 transition-all font-mono">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-600 ml-1">Google Search Console (Meta Tag)</label>
                        <input type="text" placeholder='<meta name="google-site-verification" content="..." />'
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:border-blue-500 transition-all font-mono">
                    </div>
                </div>
            </div>

            <!-- সেভ বাটন -->
            <div
                class="sticky bottom-6 bg-white/80 backdrop-blur-md p-4 rounded-3xl border border-gray-100 shadow-2xl flex justify-center">
                <button
                    class="bg-[#003557] hover:bg-[#004a7c] text-white px-20 py-4 rounded-2xl font-black shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center gap-3">
                    <i class="fa-solid fa-floppy-disk"></i> এসইও সেটিংস আপডেট করুন
                </button>
            </div>

        </form>
    </div>
</template>

<script>
export default {
    //
}
</script>

<style scoped></style>