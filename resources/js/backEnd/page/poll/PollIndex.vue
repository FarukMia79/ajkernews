<template>
    <div class="p-2 md:p-4 font-sans">
        <!-- ১. হেডার ও কুইক মেট্রিক্স -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-square-poll-vertical text-green-500"></i> অনলাইন জরিপ ব্যবস্থাপনা
                </h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">জরিপ লিস্ট</span>
                </nav>
            </div>
            <router-link to="/admin/polls/create"
                class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-plus-circle"></i> নতুন জরিপ শুরু করুন
            </router-link>
        </div>

        <!-- ২. জরিপ পরিসংখ্যান কার্ড -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 text-lg">
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-blue-100 p-3 rounded-2xl text-blue-600"><i
                        class="fa-solid fa-fire-flame-curved text-xl"></i></div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">সক্রিয় জরিপ</p>
                    <p class="text-xl font-black text-gray-800">০২টি</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-purple-100 p-3 rounded-2xl text-purple-600"><i class="fa-solid fa-users text-xl"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">মোট ভোট (আজ)</p>
                    <p class="text-xl font-black text-gray-800">৮,৪৫০</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4 text-lg">
                <div class="bg-green-100 p-3 rounded-2xl text-green-600"><i
                        class="fa-solid fa-circle-check text-xl"></i></div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">সম্পন্ন জরিপ</p>
                    <p class="text-xl font-black text-gray-800">১৫৬টি</p>
                </div>
            </div>
        </div>

        <!-- ৩. জরিপ তালিকা (Table) -->
        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden text-lg">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100 text-lg">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">জরিপের প্রশ্ন
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ফলাফল
                                (রিয়েল-টাইম)</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                                মোট ভোট</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                                অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <!-- ডামি পোল লুপ -->
                        <tr v-for="i in 3" :key="i" class="hover:bg-blue-50/20 transition-colors group">
                            <!-- প্রশ্ন -->
                            <td class="px-6 py-4 min-w-[300px]">
                                <p class="text-sm font-bold text-gray-800 leading-tight">আপনি কি মনে করেন বর্তমান জাতীয়
                                    বাজেট জনবান্ধব হয়েছে?</p>
                                <p class="text-[10px] text-gray-400 mt-1 italic">শুরু: ০১ জুন ২০২৪ | শেষ: ১৫ জুন ২০২৪
                                </p>
                            </td>
                            <!-- প্রগ্রেস বার (ফলাফল) -->
                            <td class="px-6 py-4 min-w-[200px]">
                                <div class="space-y-2">
                                    <div>
                                        <div class="flex justify-between text-[10px] font-bold mb-0.5">
                                            <span>হ্যাঁ (৬৫%)</span>
                                        </div>
                                        <div class="w-full bg-gray-100 rounded-full h-1.5">
                                            <div class="bg-green-500 h-1.5 rounded-full" style="width: 65%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between text-[10px] font-bold mb-0.5">
                                            <span>না (৩০%)</span>
                                        </div>
                                        <div class="w-full bg-gray-100 rounded-full h-1.5">
                                            <div class="bg-red-500 h-1.5 rounded-full" style="width: 30%"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <!-- ভোট সংখ্যা -->
                            <td class="px-6 py-4 text-center">
                                <span class="text-sm font-black text-gray-700">১২,৪৫০</span>
                            </td>
                            <!-- স্ট্যাটাস -->
                            <td class="px-6 py-4 text-center">
                                <span v-if="i === 1"
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-black bg-green-100 text-green-700 uppercase">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> চলমান
                                </span>
                                <span v-else
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-black bg-gray-100 text-gray-400 uppercase">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> বন্ধ
                                </span>
                            </td>
                            <!-- অ্যাকশন বাটন -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end gap-2">
                                    <router-link
                                        :to="{ name: 'adminEditPoll', params: { id: i } }"
                                        class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                        title="এডিট"><i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <button
                                        class="p-2 text-gray-400 hover:text-orange-500 hover:bg-orange-50 rounded-lg transition"
                                        title="বন্ধ করুন"><i class="fa-solid fa-stop-circle"></i></button>
                                    <button
                                        class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                        title="ডিলিট"><i class="fa-solid fa-trash-can"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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