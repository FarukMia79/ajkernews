<template>
    <div class="p-2 md:p-4 font-sans">
        <!-- ১. শিরোনাম এবং সারাংশ -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-comments text-blue-500"></i> মন্তব্য ব্যবস্থাপনা
                </h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">নিউজ কমেন্টস</span>
                </nav>
            </div>
            <!-- কুইক স্ট্যাটাস -->
            <div class="flex gap-4 bg-white p-3 rounded-2xl shadow-sm border border-gray-100">
                <div class="text-center px-4 border-r border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">পেন্ডিং</p>
                    <p class="text-lg font-black text-orange-500">১২৫</p>
                </div>
                <div class="text-center px-4">
                    <p class="text-xs font-bold text-gray-400 uppercase">আজকের মোট</p>
                    <p class="text-lg font-black text-blue-600">১,৪২০</p>
                </div>
            </div>
        </div>

        <!-- ২. ফিল্টার এবং সার্চ বার -->
        <div
            class="bg-white p-5 rounded-t-3xl border-x border-t border-gray-100 flex flex-col lg:flex-row justify-between gap-4">
            <div class="relative w-full lg:w-96">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" placeholder="মন্তব্য বা মন্তব্যকারীর নাম দিয়ে খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
            </div>
            <div class="flex flex-wrap gap-3">
                <select
                    class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                    <option value="">সব স্ট্যাটাস</option>
                    <option value="pending">অপেক্ষমান (Pending)</option>
                    <option value="approved">অনুমোদিত (Approved)</option>
                    <option value="spam">স্প্যাম (Spam)</option>
                </select>
                <button
                    class="px-5 py-2.5 bg-gray-800 text-white rounded-xl font-bold hover:bg-black transition flex items-center gap-2">
                    <i class="fa-solid fa-filter text-xs"></i> ফিল্টার করুন
                </button>
            </div>
        </div>

        <!-- ৩. কমেন্ট টেবিল -->
        <div class="bg-white rounded-b-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">মন্তব্যকারী
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">মন্তব্য ও খবর
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">সময়</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <!-- ডামি কমেন্ট লুপ -->
                        <tr v-for="i in 5" :key="i" class="hover:bg-blue-50/20 transition-colors group">
                            <!-- মন্তব্যকারী -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <img :src="`https://ui-avatars.com/api/?name=User+${i}&background=random`"
                                        class="w-10 h-10 rounded-full border border-gray-100 shadow-sm">
                                    <div>
                                        <p class="text-sm font-bold text-gray-800">রাকিব হাসান</p>
                                        <p class="text-[10px] text-gray-400">IP: 192.168.1.1</p>
                                    </div>
                                </div>
                            </td>
                            <!-- কমেন্ট এবং খবরের লিঙ্ক -->
                            <td class="px-6 py-4 min-w-[300px]">
                                <p class="text-sm text-gray-700 leading-relaxed line-clamp-2 mb-1 italic">"খবরটি পড়ে খুব
                                    ভালো লাগলো। আমাদের দেশে এমন উদ্যোগ আরও প্রয়োজন।"</p>
                                <a href="#"
                                    class="text-[11px] font-bold text-blue-500 hover:text-blue-700 flex items-center gap-1">
                                    <i class="fa-solid fa-link text-[9px]"></i> খবর: বাংলাদেশে করোনায় আক্রান্তের
                                    সংখ্যা...
                                </a>
                            </td>
                            <!-- স্ট্যাটাস ব্যাজ -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span v-if="i % 2 === 0"
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-black bg-green-100 text-green-700 uppercase">
                                    <i class="fa-solid fa-check-circle"></i> প্রকাশিত
                                </span>
                                <span v-else
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-black bg-orange-100 text-orange-700 uppercase">
                                    <i class="fa-solid fa-clock"></i> পেন্ডিং
                                </span>
                            </td>
                            <!-- সময় -->
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500 font-medium">
                                ১২ জুন ২০২৪ <br> ১০:৩০ AM
                            </td>
                            <!-- অ্যাকশন বাটন -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end gap-2">
                                    <button
                                        class="p-2 text-gray-400 hover:text-green-600 hover:bg-green-50 rounded-lg transition"
                                        title="অনুমোদন দিন">
                                        <i class="fa-solid fa-check"></i>
                                    </button>
                                    <button
                                        class="p-2 text-gray-400 hover:text-orange-600 hover:bg-orange-50 rounded-lg transition"
                                        title="স্প্যাম হিসেবে মার্ক করুন">
                                        <i class="fa-solid fa-triangle-exclamation"></i>
                                    </button>
                                    <button
                                        class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                        title="ডিলিট করুন">
                                        <i class="fa-solid fa-trash-can"></i>
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
                <p class="font-medium">মোট ৫০টি মন্তব্যের মধ্যে ১-৫টি দেখাচ্ছে</p>
                <div class="flex gap-2">
                    <button
                        class="px-4 py-2 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition font-bold shadow-sm">আগের</button>
                    <button
                        class="px-4 py-2 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition font-bold shadow-sm">পরের</button>
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