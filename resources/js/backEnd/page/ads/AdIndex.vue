<template>
    <div class="p-2 md:p-4 font-sans">
        <!-- ১. হেডার ও স্ট্যাটাস সামারি -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-rectangle-ad text-orange-500"></i> বিজ্ঞাপন ব্যবস্থাপনা
                </h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">বিজ্ঞাপন লিস্ট</span>
                </nav>
            </div>
            <router-link to="/admin/advertisements/create"
                class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-plus-circle"></i> নতুন বিজ্ঞাপন যোগ করুন
            </router-link>
        </div>

        <!-- ২. কুইক মেট্রিক্স (প্রফেশনাল টাচ) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-green-100 p-3 rounded-2xl text-green-600"><i
                        class="fa-solid fa-check-double text-xl"></i></div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">চলমান বিজ্ঞাপন</p>
                    <p class="text-xl font-black text-gray-800">০৮টি</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-orange-100 p-3 rounded-2xl text-orange-600"><i
                        class="fa-solid fa-hourglass-half text-xl"></i></div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">মেয়াদ শেষ হবে (৭ দিন)</p>
                    <p class="text-xl font-black text-gray-800">০৩টি</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="bg-blue-100 p-3 rounded-2xl text-blue-600"><i class="fa-solid fa-chart-line text-xl"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">মোট ইম্প্রেশন (আজ)</p>
                    <p class="text-xl font-black text-gray-800">৪৫.৫ কে</p>
                </div>
            </div>
        </div>

        <!-- ৩. ফিল্টার এবং সার্চ বার -->
        <div
            class="bg-white p-5 rounded-t-3xl border-x border-t border-gray-100 flex flex-col lg:flex-row justify-between gap-4">
            <div class="relative w-full lg:w-96">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" placeholder="ক্লায়েন্ট বা পজিশন দিয়ে খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:ring-4 focus:ring-blue-500/10 transition-all">
            </div>
            <select
                class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">সব পজিশন (All Placements)</option>
                <option value="header">হেডার ব্যানার</option>
                <option value="sidebar">সাইডবার অ্যাড</option>
                <option value="content">নিউজের মাঝখানে</option>
            </select>
        </div>

        <!-- ৪. বিজ্ঞাপন টেবিল -->
        <div class="bg-white rounded-b-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">প্রিভিউ</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ক্লায়েন্ট ও
                                পজিশন</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                                পারফরম্যান্স</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">মেয়াদকাল</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <!-- ডামি অ্যাড লুপ -->
                        <tr v-for="i in 4" :key="i" class="hover:bg-blue-50/20 transition-colors group">
                            <!-- প্রিভিউ -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="../../../../../public/uploads/biggapon/biggapon-1.gif"
                                    class="w-32 h-10 object-cover rounded border border-gray-100 shadow-sm">
                            </td>
                            <!-- তথ্য -->
                            <td class="px-6 py-4">
                                <p class="text-sm font-bold text-gray-800">টপ টেন শপিং মল</p>
                                <span
                                    class="text-[10px] font-black uppercase text-blue-500 bg-blue-50 px-1.5 py-0.5 rounded">হেডার
                                    ব্যানার</span>
                            </td>
                            <!-- ক্লিক/ভিউ কাউন্ট -->
                            <td class="px-6 py-4 text-center">
                                <div class="text-xs">
                                    <p class="text-gray-500">ভিউ: <span class="font-bold text-gray-800">১২,৫০০</span>
                                    </p>
                                    <p class="text-gray-500">ক্লিক: <span class="font-bold text-red-500">৪৫০</span></p>
                                </div>
                            </td>
                            <!-- ডেট রেঞ্জ -->
                            <td class="px-6 py-4 whitespace-nowrap text-[11px] text-gray-500 font-bold">
                                ০১ জুন ২০২৪ - <br> ৩০ জুন ২০২৪
                            </td>
                            <!-- স্ট্যাটাস -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-black bg-green-100 text-green-700 uppercase">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> একটিভ
                                </span>
                            </td>
                            <!-- অ্যাকশন বাটন -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end gap-2">
                                    <router-link
                                        :to="{name: 'adminEditAdvertisement', params: {id: 1}}"
                                        class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                        title="এডিট"><i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <button
                                        class="p-2 text-gray-400 hover:text-orange-500 hover:bg-orange-50 rounded-lg transition"
                                        title="বন্ধ করুন"><i class="fa-solid fa-pause"></i></button>
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