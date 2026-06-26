<template>
    <div class="p-2 md:p-6 font-sans max-w-[1600px] mx-auto text-lg">
        <!-- ১. স্বাগতম সেকশন -->
        <div class="mb-8">
            <h1 class="text-2xl font-black text-gray-800 tracking-tight">ড্যাশবোর্ড ওভারভিউ</h1>
            <p class="text-sm text-gray-500 mt-1 italic">আজকের নিউজ পোর্টালের সর্বশেষ আপডেট এবং পরিসংখ্যান এখানে দেখুন।</p>
        </div>

        <!-- ২. কুইক স্ট্যাটাস কার্ডস (৪ কলাম গ্রিড) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- কার্ড ১: মোট খবর -->
            <div class="bg-white p-6 rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 flex items-center gap-5 group hover:bg-blue-600 transition-all duration-300">
                <div class="bg-blue-100 p-4 rounded-2xl text-blue-600 group-hover:bg-white/20 group-hover:text-white transition-colors">
                    <i class="fa-solid fa-newspaper text-2xl"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 group-hover:text-white/70 uppercase">মোট খবর</p>
                    <p class="text-2xl font-black text-gray-800 group-hover:text-white">১,৪৫০</p>
                </div>
            </div>

            <!-- কার্ড ২: আজকের ভিউ -->
            <div class="bg-white p-6 rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 flex items-center gap-5 group hover:bg-green-600 transition-all duration-300">
                <div class="bg-green-100 p-4 rounded-2xl text-green-600 group-hover:bg-white/20 group-hover:text-white transition-colors">
                    <i class="fa-solid fa-eye text-2xl"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 group-hover:text-white/70 uppercase">আজকের ভিউ</p>
                    <p class="text-2xl font-black text-gray-800 group-hover:text-white">৪৫.২ কে</p>
                </div>
            </div>

            <!-- কার্ড ৩: পেন্ডিং কমেন্ট -->
            <div class="bg-white p-6 rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 flex items-center gap-5 group hover:bg-orange-500 transition-all duration-300">
                <div class="bg-orange-100 p-4 rounded-2xl text-orange-600 group-hover:bg-white/20 group-hover:text-white transition-colors">
                    <i class="fa-solid fa-comments text-2xl"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 group-hover:text-white/70 uppercase">পেন্ডিং কমেন্ট</p>
                    <p class="text-2xl font-black text-gray-800 group-hover:text-white">৮৫</p>
                </div>
            </div>

            <!-- কার্ড ৪: মোট ইউজার -->
            <div class="bg-white p-6 rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 flex items-center gap-5 group hover:bg-purple-600 transition-all duration-300">
                <div class="bg-purple-100 p-4 rounded-2xl text-purple-600 group-hover:bg-white/20 group-hover:text-white transition-colors">
                    <i class="fa-solid fa-users text-2xl"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 group-hover:text-white/70 uppercase">মোট ইউজার</p>
                    <p class="text-2xl font-black text-gray-800 group-hover:text-white">৫২০</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- ৩. সাম্প্রতিক খবরের তালিকা (টেবিল - ২ ভাগ জায়গা) -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <div class="p-6 border-b border-gray-50 flex justify-between items-center">
                        <h3 class="font-black text-gray-800 flex items-center gap-2">
                            <i class="fa-solid fa-clock-rotate-left text-blue-500"></i> সাম্প্রতিক প্রকাশিত খবর
                        </h3>
                        <router-link to="/admin/news" class="text-xs font-bold text-blue-600 hover:underline">সব দেখুন</router-link>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50/50 text-[11px] font-bold text-gray-400 uppercase tracking-widest border-b border-gray-100">
                                <tr>
                                    <th class="px-6 py-4">শিরোনাম</th>
                                    <th class="px-6 py-4">ক্যাটাগরি</th>
                                    <th class="px-6 py-4">ভিউ</th>
                                    <th class="px-6 py-4">অবস্থা</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="i in 5" :key="i" class="hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4">
                                        <p class="text-sm font-bold text-gray-800 line-clamp-1">বাংলাদেশে করোনায় আক্রান্তের সংখ্যা ৫ লাখ ছাড়িয়েছে...</p>
                                        <span class="text-[10px] text-gray-400 italic">১২ জুন ২০২৪, ১০:৩০ AM</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 bg-blue-50 text-blue-600 text-[10px] font-black rounded-md uppercase">জাতীয়</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-600">১২.৫ কে</td>
                                    <td class="px-6 py-4">
                                        <span class="w-2 h-2 rounded-full bg-green-500 inline-block mr-1"></span>
                                        <span class="text-[11px] font-bold text-gray-500">Live</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ৪. সাম্প্রতিক অ্যাক্টিভিটি ফিড (১ ভাগ জায়গা) -->
            <div class="space-y-6">
                <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 p-6">
                    <h3 class="font-black text-gray-800 mb-6 flex items-center gap-2 border-b pb-3">
                        <i class="fa-solid fa-bolt text-yellow-500"></i> সাম্প্রতিক কার্যক্রম
                    </h3>
                    <div class="space-y-6">
                        <div v-for="i in 5" :key="i" class="flex gap-4 relative">
                            <!-- টাইমলাইন দাগ -->
                            <div v-if="i !== 5" class="absolute left-5 top-10 bottom-[-20px] w-0.5 bg-gray-100"></div>
                            
                            <img :src="`https://ui-avatars.com/api/?name=Admin+${i}&background=random`" class="w-10 h-10 rounded-full z-10 border-2 border-white shadow-sm">
                            <div>
                                <p class="text-sm text-gray-700 leading-tight">
                                    <span class="font-black">ফারুক আহমেদ</span> একটি নতুন খবর প্রকাশ করেছেন।
                                </p>
                                <span class="text-[11px] text-gray-400 font-bold uppercase mt-1 inline-block">৫ মিনিট আগে</span>
                            </div>
                        </div>
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
.shadow-xl {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.02), 0 10px 10px -5px rgba(0, 0, 0, 0.01);
}
</style>