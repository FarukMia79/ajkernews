<template>
    <div class="p-2 md:p-4">
        <!-- ১. শিরোনাম এবং "নতুন যোগ করুন" বাটন -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">সাব-ক্যাটাগরি তালিকা</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">সাব-ক্যাটাগরি</span>
                </nav>
            </div>
            <router-link to="/admin/sub-categories/create" class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-plus"></i> নতুন সাব-ক্যাটাগরি
            </router-link>
        </div>

        <!-- ২. ফিল্টার এবং সার্চ বার -->
        <div class="bg-white p-5 rounded-t-2xl border-x border-t border-gray-100 grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- সার্চ বার -->
            <div class="relative md:col-span-2">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input 
                    type="text" 
                    placeholder="সাব-ক্যাটাগরি খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all"
                >
            </div>
            <!-- প্যারেন্ট ক্যাটাগরি ফিল্টার -->
            <select class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">সব মূল ক্যাটাগরি</option>
                <option value="1">জাতীয়</option>
                <option value="2">খেলাধুলা</option>
                <option value="3">বিনোদন</option>
            </select>
            <!-- স্ট্যাটাস ফিল্টার -->
            <select class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">সব স্ট্যাটাস</option>
                <option value="1">সক্রিয়</option>
                <option value="0">নিষ্ক্রিয়</option>
            </select>
        </div>

        <!-- ৩. সাব-ক্যাটাগরি টেবিল -->
        <div class="bg-white rounded-b-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">আইডি</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">সাব-ক্যাটাগরি নাম</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">মূল ক্যাটাগরি</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">স্লাগ (URL)</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">অবস্থা</th>
                            <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <!-- ডামি ডাটা লুপ -->
                        <tr v-for="(item, index) in [
                            {id: 201, name: 'ক্রিকেট', parent: 'খেলাধুলা', slug: 'cricket'},
                            {id: 202, name: 'চলচ্চিত্র', parent: 'বিনোদন', slug: 'cinema'},
                            {id: 203, name: 'ফুটবল', parent: 'খেলাধুলা', slug: 'football'},
                            {id: 204, name: 'স্বাস্থ্যকথা', parent: 'লাইফস্টাইল', slug: 'health-tips'},
                            {id: 205, name: 'টলিউড', parent: 'বিনোদন', slug: 'tollywood'}
                        ]" :key="index" class="hover:bg-blue-50/30 transition-colors group text-lg">
                            <td class="px-6 py-4 text-sm text-gray-600 font-medium">#{{ item.id }}</td>
                            <td class="px-6 py-4">
                                <span class="text-gray-800 font-bold group-hover:text-blue-600 transition-colors">{{ item.name }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-600 border border-blue-100 italic">
                                    <i class="fa-solid fa-folder-open text-[10px] mr-1"></i> {{ item.parent }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 italic">{{ item.slug }}</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> সক্রিয়
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <router-link :to="{ name: 'adminEditSubCategory', params: { id: item.id } }" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition" title="এডিট">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </router-link>
                                    <button class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition" title="ডিলিট">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ৪. প্যাজিনেশন ডিজাইন -->
            <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex justify-between items-center">
                <span class="text-sm text-gray-500 font-medium">মোট ১২০টি সাব-ক্যাটাগরির মধ্যে ১-৫টি দেখানো হচ্ছে</span>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-400 cursor-not-allowed font-bold transition text-sm">আগের</button>
                    <button class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-gray-700 hover:text-blue-600 font-bold transition text-sm">পরের</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style scoped>
th {
    letter-spacing: 0.05em;
}
</style>