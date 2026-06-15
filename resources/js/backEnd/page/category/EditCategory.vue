<template>
    <div class="max-w-4xl mx-auto p-4 md:p-6">
        <!-- ১. শিরোনাম এবং ব্রেডক্রাম্ব -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">ক্যাটাগরি সংশোধন করুন</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span>ক্যাটাগরি</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-orange-600 font-medium">এডিট করুন</span>
                </nav>
            </div>
            <router-link to="/admin/categories"
                class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-2.5 rounded-xl font-bold transition-all duration-300 flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> ফিরে যান
            </router-link>
        </div>

        <!-- ২. এডিট ফর্ম কার্ড -->
        <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <!-- একটি হালকা হলুদ বর্ডার ওপরে দেওয়া হয়েছে এটি যে এডিট পেজ তা বোঝাতে -->
            <div class="h-1.5 bg-orange-500 w-full"></div>

            <div class="p-6 md:p-10">
                <form @submit.prevent class="space-y-8">

                    <!-- ক্যাটাগরি নাম এবং স্লাগ -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- নাম -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">ক্যাটাগরির নাম</label>
                            <input type="text" value="জাতীয়"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all duration-300 font-bold">
                        </div>

                        <!-- স্লাগ -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">স্লাগ / URL (পরিবর্তন না করাই
                                ভালো)</label>
                            <input type="text" value="national-news"
                                class="w-full bg-gray-100 border border-gray-200 rounded-xl px-4 py-3 text-gray-500 outline-none cursor-not-allowed"
                                readonly>
                        </div>
                    </div>

                    <!-- বর্ণনা -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">সংক্ষিপ্ত বর্ণনা</label>
                        <textarea rows="4"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all duration-300 resize-none">বাংলাদেশের সব জেলার সর্বশেষ খবর এই ক্যাটাগরিতে থাকবে।</textarea>
                    </div>

                    <!-- স্ট্যাটাস এবং সাবমিট বাটন -->
                    <div
                        class="flex flex-col md:flex-row justify-between items-center gap-6 pt-6 border-t border-gray-50">
                        <div class="flex items-center gap-4">
                            <label class="text-sm font-bold text-gray-700">অবস্থা:</label>
                            <select
                                class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-orange-500 transition cursor-pointer">
                                <option value="1" selected>সক্রিয় (Active)</option>
                                <option value="0">নিষ্ক্রিয় (Inactive)</option>
                            </select>
                        </div>

                        <div class="flex items-center gap-4 w-full md:w-auto">
                            <button
                                class="flex-1 md:flex-none px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition">
                                বাতিল
                            </button>
                            <button
                                class="flex-1 md:flex-none bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 transform active:scale-95 flex items-center justify-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> পরিবর্তন সেভ করুন
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- ৩. সতর্কবার্তা (Warning) - এডিট পেজের জন্য এটি প্রফেশনাল টিপস -->
        <div class="mt-8 p-4 bg-orange-50 border-l-4 border-orange-400 rounded-r-lg flex gap-4 items-start">
            <i class="fa-solid fa-triangle-exclamation text-orange-500 mt-1"></i>
            <div>
                <h4 class="text-sm font-bold text-orange-800">সাবধানতা:</h4>
                <p class="text-xs text-orange-700 leading-relaxed mt-0.5">
                    ক্যাটাগরির নাম বা স্লাগ পরিবর্তন করলে এই ক্যাটাগরির অধীনে থাকা সব খবরের লিঙ্কে (URL) প্রভাব পড়তে
                    পারে। তাই পরিবর্তন করার আগে নিশ্চিত হয়ে নিন।
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
input:focus,
textarea:focus {
    border-color: #f97316;
}
</style>