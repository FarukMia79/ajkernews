<template>
    <div class="p-2 md:p-6 max-w-[1600px] mx-auto">
        <!-- ১. হেডার সেকশন (টাইটেল এবং অ্যাকশন বাটন) -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">খবর সংশোধন করুন</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span>নিউজ</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-orange-600 font-medium">এডিট</span>
                </nav>
            </div>
            <div class="flex flex-wrap gap-3 w-full md:w-auto">
                <!-- লাইভ প্রিভিউ বাটন (নিউজ সাইটে এটি খুব জরুরি) -->
                <a href="#" target="_blank"
                    class="px-5 py-2.5 bg-blue-50 text-blue-600 border border-blue-100 rounded-xl font-bold hover:bg-blue-100 transition flex items-center gap-2">
                    <i class="fa-solid fa-eye"></i> সাইটে দেখুন
                </a>
                <button
                    class="px-8 py-2.5 bg-[#003557] hover:bg-[#004a7c] text-white rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center justify-center gap-2 transform active:scale-95">
                    <i class="fa-solid fa-floppy-disk"></i> আপডেট করুন
                </button>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- ২. বাম পাশের মেইন কন্টেন্ট (70%) -->
            <div class="w-full lg:w-2/3 space-y-6">

                <!-- শিরোনাম এবং স্লাগ (Pre-filled) -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-orange-100 space-y-4">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700">খবরের শিরোনাম <span
                                class="text-red-500">*</span></label>
                        <input type="text" value="সরকারি অফিসে ৩ লাখ ৬০ হাজার পদ শূন্য : নতুন নিয়োগ আসছে"
                            class="w-full text-xl font-bold p-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-widest">স্লাগ / URL Slug
                            (সাবধানে এডিট করুন)</label>
                        <input type="text" value="sorkari-office-3-lakh-60-hazar-pad-shunno-natun-niyog-asche"
                            class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded-lg text-sm text-gray-600 outline-none focus:bg-white focus:border-orange-400">
                    </div>
                </div>

                <!-- মূল খবর (Text Editor) -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <label class="text-sm font-bold text-gray-700 mb-4 block">বিস্তারিত সংবাদ</label>
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <div class="bg-gray-50 border-b border-gray-200 p-2 flex flex-wrap gap-2">
                            <button v-for="icon in ['bold', 'italic', 'underline', 'link', 'image', 'list-ul']"
                                :key="icon"
                                class="w-8 h-8 flex items-center justify-center hover:bg-white rounded text-gray-600">
                                <i :class="`fa-solid fa-${icon}`"></i>
                            </button>
                        </div>
                        <textarea rows="15"
                            class="w-full p-4 outline-none resize-none text-lg leading-relaxed">এখানে আপনার আগের খবরের কন্টেন্টগুলো থাকবে যা এখন এডিট করা যাবে...</textarea>
                    </div>
                </div>
            </div>

            <!-- ৩. ডান পাশের সাইডবার সেটিংস (30%) -->
            <div class="w-full lg:w-1/3 space-y-6">

                <!-- পাবলিশ ইনফো (এডিট পেজের জন্য বিশেষ কার্ড) -->
                <div class="bg-orange-50 p-6 rounded-2xl border border-orange-200">
                    <h3 class="text-base font-bold text-orange-800 mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-circle-info"></i> পাবলিশ তথ্য
                    </h3>
                    <div class="space-y-2 text-sm text-orange-700">
                        <p><strong>অবস্থা:</strong> পাবলিশড</p>
                        <p><strong>প্রথম প্রকাশ:</strong> ১২ জুন ২০২৪, ১০:০০ AM</p>
                        <p><strong>সর্বশেষ আপডেট:</strong> ১৩ জুন ২০২৪, ০২:৩০ PM</p>
                    </div>
                </div>

                <!-- ক্যাটাগরি এবং স্ট্যাটাস -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 space-y-4">
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-gray-500 uppercase">ক্যাটাগরি</label>
                        <select class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none">
                            <option selected>জাতীয়</option>
                            <option>রাজনীতি</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-gray-500 uppercase">অবস্থা (Status)</label>
                        <select class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none">
                            <option value="published">পাবলিশড</option>
                            <option value="draft">ড্রাফট (হাইড হবে)</option>
                        </select>
                    </div>
                </div>

                <!-- থাম্বনেইল প্রিভিউ (খুবই জরুরি) -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-4">ফিচার ইমেজ</h3>
                    <div class="relative group rounded-xl overflow-hidden mb-4 border border-gray-100 shadow-sm">
                        <img src="../../../../../public/uploads/post/parlament-sm-20171120165706.jpg" alt="Thumbnail"
                            class="w-full h-auto">
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <button class="bg-white text-gray-800 px-4 py-2 rounded-lg font-bold text-sm">ছবি
                                বদলান</button>
                        </div>
                    </div>
                    <p class="text-[10px] text-gray-400 text-center">নতুন ছবি আপলোড করতে ওপরে ক্লিক করুন</p>
                </div>

                <!-- নিউজ সেটিংস -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 space-y-3">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded accent-orange-600" checked>
                        <span class="text-sm text-gray-600">ব্রেকিং নিউজ</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded accent-orange-600">
                        <span class="text-sm text-gray-600">স্লাইডারে দেখান</span>
                    </label>
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
th {
    letter-spacing: 0.025em;
}
</style>