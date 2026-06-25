<template>
    <div class="p-2 md:p-6 max-w-[1600px] mx-auto font-sans">
        <!-- ১. হেডার ও ফিরে যাওয়ার বাটন -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">নতুন ভিডিও যোগ করুন</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/video-gallery" class="hover:text-blue-600 font-medium">ভিডিও
                        গ্যালারি</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-bold">ভিডিও আপলোড</span>
                </nav>
            </div>
            <router-link to="/admin/video-gallery"
                class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 rounded-xl font-bold transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> গ্যালারিতে ফিরে যান
            </router-link>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- ২. বাম পাশের মেইন ফর্ম কন্টেন্ট (70%) -->
            <div class="w-full lg:w-2/3 space-y-6">
                <!-- শিরোনাম ও লিঙ্ক কার্ড -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 space-y-6">
                    <!-- ভিডিওর টাইটেল -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700">ভিডিওর শিরোনাম (বাংলায়) <span
                                class="text-red-500">*</span></label>
                        <input type="text" placeholder="আকর্ষণীয় ভিডিওর শিরোনাম দিন..."
                            class="w-full text-lg font-bold p-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                    </div>

                    <!-- ইউটিউব লিঙ্ক (মডার্ন নিউজ পোর্টাল সিস্টেম) -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 flex items-center gap-2">
                            <i class="fa-brands fa-youtube text-red-600 text-lg"></i> ইউটিউব ভিডিও লিঙ্ক (YouTube URL)
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="text" placeholder="উদা: https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                            class="w-full p-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-red-500/10 focus:border-red-500 transition-all font-mono text-sm">
                    </div>
                </div>

                <!-- লাইভ ভিডিও প্রিভিউ প্লেসহোল্ডার (অত্যন্ত প্রফেশনাল ফিচার) -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <label class="text-sm font-bold text-gray-700 mb-4 block">লাইভ প্রিভিউ (Video Preview)</label>
                    <div
                        class="aspect-video w-full bg-slate-950 rounded-2xl flex items-center justify-center border-2 border-dashed border-gray-200 text-center p-6 group cursor-pointer hover:border-red-500 transition-colors">
                        <div class="space-y-3">
                            <div
                                class="bg-red-500/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition">
                                <i class="fa-solid fa-play text-2xl text-red-600"></i>
                            </div>
                            <p class="text-sm text-gray-400 font-medium">ইউটিউব লিঙ্ক দেওয়ার পর এখানে ভিডিওর প্রিভিউ
                                দেখা যাবে</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ৩. ডান পাশের সাইডবার সেটিংস (30%) -->
            <div class="w-full lg:w-1/3 space-y-6">
                <!-- সেটিংস ও অ্যালবাম -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-list-check text-blue-500"></i> ক্যাটাগরি ও অবস্থা
                    </h3>
                    <div class="space-y-4">
                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-bold text-gray-500">ভিডিওর ক্যাটাগরি</label>
                            <select
                                class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                <option>টক শো (Talk Show)</option>
                                <option>খেলাধুলা (Sports)</option>
                                <option>আন্তর্জাতিক (International)</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-bold text-gray-500">স্ট্যাটাস (Status)</label>
                            <select
                                class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                <option value="published">পাবলিশড (Public)</option>
                                <option value="draft">ড্রাফট (Private)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- এসইও ট্যাগস -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-4">ট্যাগসমূহ (Tags)</h3>
                    <div class="flex flex-col gap-2">
                        <input type="text" placeholder="উদা: টকশো, রাজনীতি, বিসিবি"
                            class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none">
                        <p class="text-[10px] text-gray-400 italic">ট্যাগগুলো ভিডিওর নিচে এসইও র‍্যাঙ্কিংয়ে সাহায্য
                            করবে।</p>
                    </div>
                </div>

                <!-- অ্যাকশন বাটন কার্ড -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col gap-3">
                    <button
                        class="w-full bg-[#003557] hover:bg-[#004a7c] text-white py-3.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition transform active:scale-95 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-square-plus"></i> ভিডিও প্রকাশ করুন
                    </button>
                    <button
                        class="w-full text-center py-2 text-gray-500 hover:text-gray-800 font-medium transition">বাতিল</button>
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