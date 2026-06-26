<template>
    <div class="p-2 md:p-4 font-sans">
        <!-- ১. হেডার এবং ইনবক্স স্ট্যাটাস -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-envelope-open-text text-purple-600"></i> ইনবক্স (Messages)
                </h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">কন্টাক্ট মেসেজ</span>
                </nav>
            </div>
            <!-- অপঠিত বার্তার সংখ্যা -->
            <div class="bg-red-50 px-6 py-2 rounded-2xl border border-red-100 flex items-center gap-3">
                <span class="relative flex h-3 w-3">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                </span>
                <p class="text-sm font-bold text-red-700">০৫টি নতুন বার্তা</p>
            </div>
        </div>

        <!-- ২. ফিল্টার এবং সার্চ বার -->
        <div
            class="bg-white p-5 rounded-t-3xl border-x border-t border-gray-100 flex flex-col lg:flex-row justify-between gap-4">
            <div class="relative w-full lg:w-96">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" placeholder="নাম বা ইমেইল দিয়ে খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
            </div>
            <div class="flex gap-3">
                <select
                    class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                    <option value="">সব মেসেজ</option>
                    <option value="unread">অপঠিত (Unread)</option>
                    <option value="read">পঠিত (Read)</option>
                </select>
            </div>
        </div>

        <!-- ৩. মেসেজ টেবিল -->
        <div class="bg-white rounded-b-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">প্রেরক</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">বিষয় ও বার্তা
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                                অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">তারিখ</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <!-- ডামি মেসেজ লুপ -->
                        <tr v-for="i in 5" :key="i" :class="i < 3 ? 'bg-blue-50/20' : ''"
                            class="hover:bg-gray-50 transition-colors group">

                            <!-- প্রেরক -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-sm border border-purple-200 shadow-sm">
                                        {{ i === 1 ? 'R' : 'S' }}
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-800">রাকিব আহমেদ</p>
                                        <p class="text-[11px] text-gray-500 font-medium">rakib@gmail.com</p>
                                    </div>
                                </div>
                            </td>

                            <!-- বিষয় ও মেসেজ বডি -->
                            <td class="px-6 py-4 min-w-[300px]">
                                <p :class="i < 3 ? 'font-black text-gray-900' : 'font-medium text-gray-700'"
                                    class="text-sm mb-0.5">বিজ্ঞাপন বিষয়ক প্রস্তাবনা</p>
                                <p class="text-xs text-gray-500 line-clamp-1 italic">"আপনাদের নিউজ পোর্টালে আমাদের
                                    কোম্পানির বিজ্ঞাপন দিতে চাই, বিস্তারিত জানতে..."</p>
                            </td>

                            <!-- স্ট্যাটাস ব্যাজ -->
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span v-if="i < 3"
                                    class="px-2.5 py-0.5 rounded-full text-[10px] font-black bg-blue-100 text-blue-700 uppercase tracking-wider border border-blue-200">New</span>
                                <span v-else
                                    class="px-2.5 py-0.5 rounded-full text-[10px] font-black bg-gray-100 text-gray-400 uppercase tracking-wider">Read</span>
                            </td>

                            <!-- তারিখ -->
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500 font-bold">
                                ১২ জুন ২০২৪ <br> <span class="font-normal opacity-60">১০:৩০ AM</span>
                            </td>

                            <!-- অ্যাকশন -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end gap-2">
                                    <router-link :to="{name: 'adminShowMessage', params: {id: i}}"
                                        class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                        title="মেসেজটি পড়ুন">
                                        <i class="fa-solid fa-eye text-sm"></i>
                                    </router-link>
                                    <button
                                        class="p-2 text-gray-400 hover:text-green-600 hover:bg-green-50 rounded-lg transition"
                                        title="রিপ্লাই দিন">
                                        <i class="fa-solid fa-reply text-sm"></i>
                                    </button>
                                    <button
                                        class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                        title="ডিলিট">
                                        <i class="fa-solid fa-trash-can text-sm"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ৪. প্যাজিনেশন -->
            <div
                class="px-6 py-5 bg-gray-50/50 border-t border-gray-100 flex justify-between items-center text-sm text-gray-500">
                <p class="font-medium tracking-tight">মোট ১২০টি বার্তার মধ্যে ১-৫টি দেখাচ্ছে</p>
                <div class="flex gap-2">
                    <button
                        class="px-5 py-2 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition font-bold shadow-sm">আগের</button>
                    <button
                        class="px-5 py-2 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition font-bold shadow-sm">পরের</button>
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