<template>
    <div class="p-2 md:p-6 max-w-[1600px] mx-auto">
        <!-- ১. হেডার সেকশন -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">নতুন খবর প্রকাশ করুন</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span>নিউজ</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">নতুন খবর</span>
                </nav>
            </div>
            <div class="flex gap-3 w-full md:w-auto">
                <button
                    class="flex-1 md:flex-none px-6 py-2.5 bg-white border border-gray-200 rounded-xl font-bold text-gray-600 hover:bg-gray-50 transition">ড্রাফট
                    রাখুন</button>
                <button
                    class="flex-1 md:flex-none px-8 py-2.5 bg-[#003557] hover:bg-[#004a7c] text-white rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center justify-center gap-2">
                    <i class="fa-solid fa-paper-plane"></i> পাবলিশ করুন
                </button>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- ২. বাম পাশের মেইন কন্টেন্ট (70%) -->
            <div class="w-full lg:w-2/3 space-y-6">
                <!-- শিরোনাম কার্ড -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 space-y-4">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700">খবরের শিরোনাম <span
                                class="text-red-500">*</span></label>
                        <input type="text" placeholder="আকর্ষণীয় শিরোনাম লিখুন..."
                            class="w-full text-xl font-bold p-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-widest">স্লাগ / URL
                            Slug</label>
                        <div
                            class="flex items-center bg-gray-100 px-4 py-2 rounded-lg text-sm text-gray-500 border border-dashed border-gray-300">
                            <span>ajkernews.com/news/</span>
                            <span class="font-medium text-blue-600 ml-1 italic">auto-generated-url-here</span>
                        </div>
                    </div>
                </div>

                <!-- মূল খবর (Rich Text Editor Placeholder) -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <label class="text-sm font-bold text-gray-700 mb-4 block">বিস্তারিত সংবাদ <span
                            class="text-red-500">*</span></label>
                    <!-- মক টেক্সট এডিটর টুলবার -->
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <div class="bg-gray-50 border-b border-gray-200 p-2 flex flex-wrap gap-2">
                            <button
                                v-for="icon in ['bold', 'italic', 'underline', 'link', 'image', 'list-ul', 'list-ol']"
                                :key="icon"
                                class="w-8 h-8 flex items-center justify-center hover:bg-white hover:shadow-sm rounded border border-transparent hover:border-gray-200 text-gray-600 transition">
                                <i :class="`fa-solid fa-${icon}`"></i>
                            </button>
                        </div>
                        <textarea rows="15" placeholder="এখান থেকে খবর লেখা শুরু করুন..."
                            class="w-full p-4 outline-none resize-none text-lg leading-relaxed"></textarea>
                    </div>
                </div>

                <!-- এসইও (SEO) সেকশন - প্রফেশনাল টাচ -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">এসইও কনফিগারেশন (SEO)</h3>
                    <div class="space-y-4">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700">মেটা ডেসক্রিপশন</label>
                            <textarea rows="3"
                                class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none"
                                placeholder="সার্চ ইঞ্জিনের জন্য ছোট বর্ণনা..."></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ৩. ডান পাশের সাইডবার সেটিংস (30%) -->
            <div class="w-full lg:w-1/3 space-y-6">
                <!-- ক্যাটাগরি কার্ড -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-list-check text-blue-500"></i> ক্যাটাগরি ও ট্যাগ
                    </h3>
                    <div class="space-y-4">
                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-bold text-gray-500">প্রধান ক্যাটাগরি</label>
                            <select
                                class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                <option value="">ক্যাটাগরি নির্বাচন করুন</option>
                                <option>জাতীয়</option>
                                <option>রাজনীতি</option>
                                <option>খেলাধুলা</option>
                            </select>
                        </div>

                        <!-- সাব-ক্যাটাগরি -->
                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-bold text-gray-500">সাব-ক্যাটাগরি</label>
                            <select
                                class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                <option value="">সাব-ক্যাটাগরি নির্বাচন করুন</option>
                                <option>আন্তর্জাতিক</option>
                                <option>অর্থনীতি</option>
                                <option>বিনোদন</option>
                            </select>
                        </div>

                        <!-- বিভাগ -->
                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-bold text-gray-500">বিভাগ</label>
                            <select
                                class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                <option value="">বিভাগ নির্বাচন করুন</option>
                                <option>ঢাকা</option>
                                <option>চট্টগ্রাম</option>
                                <option>রাজশাহী</option>
                                <option>খুলনা</option>
                                <option>বরিশাল</option>
                                <option>সিলেট</option>
                                <option>রংপুর</option>
                                <option>ময়মনসিংহ</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-bold text-gray-500">ট্যাগ (কমা দিয়ে লিখুন)</label>
                            <input type="text" placeholder="উদা: ক্রিকেট, বিসিবি"
                                class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none">
                        </div>
                    </div>
                </div>

                <!-- থাম্বনেইল ইমেজ কার্ড -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-image text-green-500"></i> থাম্বনেইল ছবি
                    </h3>
                    <div
                        class="border-2 border-dashed border-gray-200 rounded-2xl p-4 text-center hover:border-blue-400 transition cursor-pointer group">
                        <div class="py-4">
                            <i
                                class="fa-solid fa-cloud-arrow-up text-3xl text-gray-300 group-hover:text-blue-500 transition"></i>
                            <p class="text-sm text-gray-500 mt-2 font-medium">ছবি আপলোড করতে ক্লিক করুন</p>
                            <p class="text-[10px] text-gray-400 mt-1">সুপারিশকৃত সাইজ: ১২০০ x ৬৭৫ (JPG, PNG)</p>
                        </div>
                    </div>
                </div>

                <!-- সেটিংস ও অপশন কার্ড -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-base font-bold text-gray-800 mb-4">নিউজ অপশনস</h3>
                    <div class="space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="w-4 h-4 rounded accent-blue-600">
                            <span class="text-sm text-gray-600 group-hover:text-black transition">ব্রেকিং নিউজ হিসেবে
                                দেখান</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="w-4 h-4 rounded accent-blue-600">
                            <span class="text-sm text-gray-600 group-hover:text-black transition">স্লাইডারে যুক্ত
                                করুন</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="w-4 h-4 rounded accent-blue-600" checked>
                            <span class="text-sm text-gray-600 group-hover:text-black transition">কমেন্ট করার সুবিধা
                                রাখুন</span>
                        </label>
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

<style scoped></style>