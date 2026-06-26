<template>
    <div class="max-w-4xl mx-auto p-2 md:p-6 font-sans">
        <!-- ১. হেডার ও ফিরে যাওয়ার বাটন -->
        <div class="flex justify-between items-center mb-8 bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
            <div>
                <h2 class="text-2xl font-black text-gray-800 tracking-tight">নতুন ছবি যোগ করুন</h2>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/photo-gallery" class="hover:text-blue-600 font-medium">ফটো
                        গ্যালারি</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-bold">ছবি আপলোড</span>
                </nav>
            </div>
            <router-link to="/admin/photo-gallery"
                class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 rounded-xl font-bold transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> গ্যালারিতে ফিরে যান
            </router-link>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <form @submit.prevent class="p-6 md:p-10 space-y-8">

                <!-- ২. ড্র্যাগ এন্ড ড্রপ আপলোড এরিয়া -->
                <div class="space-y-3">
                    <label class="text-sm font-bold text-gray-700 ml-1">ছবি নির্বাচন করুন <span
                            class="text-red-500">*</span></label>
                    <div
                        class="relative group border-2 border-dashed border-gray-200 rounded-3xl p-10 text-center hover:border-blue-400 hover:bg-blue-50/30 transition-all cursor-pointer">
                        <input type="file" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full">

                        <div class="space-y-4">
                            <div
                                class="bg-blue-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-blue-500"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-700">এখানে ছবি ড্র্যাগ করুন অথবা ক্লিক করুন</h3>
                                <p class="text-sm text-gray-400 italic">সুপারিশকৃত সাইজ: ১২০০ x ৬৭৫ (সর্বোচ্চ ২ এমবি)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ৩. ছবির ক্যাপশন ও তথ্য -->
                <div class="space-y-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">ছবির ক্যাপশন (বাংলায়)</label>
                        <input type="text" placeholder="ছবির একটি সুন্দর শিরোনাম দিন..."
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all text-lg">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- ক্যাটাগরি -->
                        <div class="flex flex-col gap-2 text-lg">
                            <label class="text-sm font-bold text-gray-700 ml-1">গ্যালারি অ্যালবাম</label>
                            <select
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                                <option value="">অ্যালবাম নির্বাচন করুন (যদি থাকে)</option>
                                <option value="events">অনুষ্ঠান</option>
                                <option value="politics">রাজনীতি</option>
                                <option value="sports">খেলাধুলা</option>
                            </select>
                        </div>

                        <!-- তারিখ -->
                        <div class="flex flex-col gap-2 text-lg">
                            <label class="text-sm font-bold text-gray-700 ml-1">ক্যাপশনের তারিখ</label>
                            <input type="date"
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- ৪. অ্যাকশন বাটন -->
                <div class="pt-8 border-t border-gray-50 flex flex-col md:flex-row justify-end gap-4">
                    <button type="button"
                        class="px-8 py-3.5 text-gray-500 hover:text-gray-800 font-bold transition">বাতিল</button>
                    <button type="submit"
                        class="bg-[#003557] hover:bg-[#004a7c] text-white px-12 py-3.5 rounded-2xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-upload"></i> ছবি আপলোড সম্পন্ন করুন
                    </button>
                </div>

            </form>
        </div>

        <!-- ৫. আপলোড প্রোগ্রেস বার -->
        <div class="mt-6 bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="bg-blue-100 p-3 rounded-xl">
                <i class="fa-solid fa-spinner animate-spin text-blue-600"></i>
            </div>
            <div class="flex-1">
                <div class="flex justify-between mb-1">
                    <span class="text-xs font-bold text-gray-700 uppercase">আপলোড হচ্ছে...</span>
                    <span class="text-xs font-bold text-blue-600">৬৫%</span>
                </div>
                <div class="w-full bg-gray-100 rounded-full h-1.5">
                    <div class="bg-blue-500 h-1.5 rounded-full" style="width: 65%"></div>
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