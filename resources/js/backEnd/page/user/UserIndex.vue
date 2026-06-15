<template>
    <div class="p-2 md:p-4">
        <!-- ১. শিরোনাম এবং "নতুন ইউজার" বাটন -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">ইউজার ম্যানেজমেন্ট</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">ইউজার লিস্ট</span>
                </nav>
            </div>
            <button
                class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-user-plus"></i> নতুন ইউজার যোগ করুন
            </button>
        </div>

        <!-- ২. ফিল্টার এবং সার্চ বার -->
        <div
            class="bg-white p-5 rounded-t-2xl border-x border-t border-gray-100 flex flex-col md:flex-row justify-between gap-4">
            <div class="relative w-full md:w-96">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" placeholder="নাম বা ইমেইল দিয়ে খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
            </div>
            <div class="flex gap-3">
                <select
                    class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                    <option value="">সব রোল (Roles)</option>
                    <option value="admin">অ্যাডমিন</option>
                    <option value="editor">এডিটর</option>
                    <option value="reporter">রিপোর্টার</option>
                </select>
            </div>
        </div>

        <!-- ৩. ইউজার টেবিল -->
        <div class="bg-white rounded-b-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ইউজার
                                প্রোফাইল</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">রোল (Role)
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">স্ট্যাটাস
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">যোগদানের
                                তারিখ</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">
                                অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <!-- ডামি ইউজার লুপ -->
                        <tr v-for="i in 5" :key="i" class="hover:bg-blue-50/30 transition-colors group">
                            <!-- প্রোফাইল ইনফো -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <img :src="`https://ui-avatars.com/api/?name=User+${i}&background=random`"
                                        class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
                                    <div>
                                        <p class="text-sm font-bold text-gray-800">ফারুক আহমেদ {{ i }}</p>
                                        <p class="text-xs text-gray-500">faruk{{ i }}@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <!-- রোল ব্যাজ -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span v-if="i === 1"
                                    class="px-3 py-1 rounded-lg text-[11px] font-bold bg-purple-100 text-purple-700">Admin</span>
                                <span v-else-if="i === 2"
                                    class="px-3 py-1 rounded-lg text-[11px] font-bold bg-blue-100 text-blue-700">Editor</span>
                                <span v-else
                                    class="px-3 py-1 rounded-lg text-[11px] font-bold bg-teal-100 text-teal-700">Reporter</span>
                            </td>
                            <!-- স্ট্যাটাস -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> অ্যাক্টিভ
                                </span>
                            </td>
                            <!-- তারিখ -->
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 font-medium">
                                ১২ জুন ২০২৪
                            </td>
                            <!-- অ্যাকশন বাটন -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex justify-end gap-2">
                                    <button
                                        class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                        title="এডিট">
                                        <i class="fa-solid fa-user-pen"></i>
                                    </button>
                                    <button
                                        class="p-2 text-gray-400 hover:text-orange-600 hover:bg-orange-50 rounded-lg transition"
                                        title="পাসওয়ার্ড রিসেট">
                                        <i class="fa-solid fa-key"></i>
                                    </button>
                                    <button
                                        class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                        title="ডিলিট">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ৪. প্যাজিনেশন -->
            <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex justify-between items-center">
                <span class="text-sm text-gray-500 font-medium">মোট ৫০ জন ইউজারের মধ্যে ১-৫ জন দেখানো হচ্ছে</span>
                <div class="flex gap-2">
                    <button
                        class="p-2 px-4 bg-white border border-gray-200 rounded-xl text-gray-400 cursor-not-allowed font-bold transition">আগের</button>
                    <button
                        class="p-2 px-4 bg-white border border-gray-200 rounded-xl text-gray-700 hover:text-blue-600 font-bold transition">পরের</button>
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