<template>
    <div class="p-2 md:p-6 font-sans max-w-[1600px] mx-auto">
        <!-- ১. হেডার ও ব্রেডক্রাম্ব -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-images text-cyan-500"></i> ফটো গ্যালারি ম্যানেজমেন্ট
                </h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">ফটো গ্যালারি</span>
                </nav>
            </div>
            <!-- ইমেজ আপলোড বাটন (মোডাল বা ড্রপজোন ওপেন করবে) -->
            <router-link to="/admin/photo-gallery/upload" class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-cloud-arrow-up"></i> নতুন ছবি আপলোড
            </router-link>
        </div>

        <!-- ২. ইমেজ আপলোড এরিয়া (প্লেসহোল্ডার) -->
        <div class="mb-10 bg-white p-8 rounded-3xl border-2 border-dashed border-gray-200 text-center hover:border-blue-400 transition cursor-pointer group">
            <i class="fa-solid fa-file-image text-5xl text-gray-300 group-hover:text-blue-500 transition-all mb-4"></i>
            <h3 class="text-lg font-bold text-gray-700">এখানে ছবি ড্র্যাগ করে ছাড়ুন অথবা ক্লিক করুন</h3>
            <p class="text-sm text-gray-400 mt-1 italic">সর্বোচ্চ ফাইল সাইজ: ২ এমবি (JPG, PNG, WebP)</p>
        </div>

        <!-- ৩. ফিল্টার এবং সার্চ -->
        <div class="flex justify-between items-center mb-6 gap-4">
            <h2 class="text-xl font-bold text-gray-700">গ্যালারি লাইব্রেরি (১২০টি ছবি)</h2>
            <div class="relative w-full md:w-72">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" placeholder="ক্যাপশন দিয়ে খুঁজুন..." 
                       class="w-full pl-11 pr-4 py-2.5 bg-white border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
            </div>
        </div>

        <!-- ৪. ফটো গ্রিড লাইব্রেরি -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            
            <!-- ৫. ফটো কার্ড লুপ -->
            <div v-for="i in 10" :key="i" class="group bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300">
                
                <!-- ইমেজ প্রিভিউ -->
                <div class="relative aspect-video overflow-hidden bg-gray-100">
                    <img src="../../../../../../public/uploads/photo_gallery/u2019u2019u2019u2019u2019u2019u2019-84-600x337.jpg" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- ছবির ওপরে কুইক অ্যাকশন (হোভার করলে দেখা যাবে) -->
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2">
                        <button class="p-2 bg-white text-gray-800 rounded-full hover:bg-blue-500 hover:text-white transition" title="বড় করে দেখুন">
                            <i class="fa-solid fa-maximize text-sm"></i>
                        </button>
                        <button class="p-2 bg-white text-red-600 rounded-full hover:bg-red-600 hover:text-white transition" title="ডিলিট করুন">
                            <i class="fa-solid fa-trash-can text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- ইনফো সেকশন -->
                <div class="p-3">
                    <p class="text-xs font-bold text-gray-800 line-clamp-1 mb-1">সবুজের মাঝে হাস্যোজ্জ্বল মেহজাবিন।</p>
                    <div class="flex justify-between items-center text-[10px] text-gray-400 font-medium">
                        <span>১২ জুন ২০২৪</span>
                        <span class="px-2 py-0.5 bg-gray-100 rounded text-gray-500 uppercase tracking-tighter italic">1.2 MB</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- ৬. প্যাজিনেশন -->
        <div class="mt-10 flex justify-center">
            <div class="flex gap-2">
                <button class="px-5 py-2 bg-white border border-gray-200 rounded-xl font-bold text-gray-400 cursor-not-allowed">আগের</button>
                <button class="px-5 py-2 bg-[#003557] text-white rounded-xl font-bold shadow-md">১</button>
                <button class="px-5 py-2 bg-white border border-gray-200 rounded-xl font-bold text-gray-700 hover:bg-gray-50">২</button>
                <button class="px-5 py-2 bg-white border border-gray-200 rounded-xl font-bold text-gray-700 hover:bg-gray-50">পরের</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
.rounded-2xl {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style>