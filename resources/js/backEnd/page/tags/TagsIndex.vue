<template>
    <div class="p-2 md:p-6 font-sans max-w-[1600px] mx-auto relative">
        <!-- ১. হেডার ও ব্রেডক্রাম্ব -->
        <div class="mb-8">
            <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                <i class="fa-solid fa-tags text-pink-500"></i> নিউজ ট্যাগ ম্যানেজমেন্ট
            </h1>
            <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                <span>অ্যাডমিন</span>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <span class="text-blue-600 font-medium">ট্যাগ লিস্ট</span>
            </nav>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- ২. বাম পাশ: নতুন ট্যাগ যোগ করার ফর্ম (৩০% জায়গা) -->
            <div class="w-full lg:w-1/3">
                <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden sticky top-6">
                    <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
                        <h3 class="font-bold text-gray-700 flex items-center gap-2">
                            <i class="fa-solid fa-plus-circle text-blue-500"></i> নতুন ট্যাগ যোগ করুন
                        </h3>
                    </div>
                    <form @submit.prevent class="p-6 space-y-5">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-600 ml-1">ট্যাগের নাম (বাংলা/ইংরেজি)</label>
                            <input type="text" placeholder="উদা: বাজেট ২০২৪ বা নির্বাচন" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all duration-300">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-600 ml-1">স্লাগ / URL</label>
                            <input type="text" placeholder="উদা: budget-2024" class="w-full bg-gray-100 border border-gray-200 rounded-xl px-4 py-3 text-gray-500 outline-none cursor-not-allowed" readonly>
                        </div>
                        <button class="w-full bg-[#003557] hover:bg-[#004a7c] text-white py-3 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-check-circle"></i> ট্যাগ সংরক্ষণ করুন
                        </button>
                    </form>
                </div>
            </div>

            <!-- ৩. ডান পাশ: ট্যাগের তালিকা (৭০% জায়গা) -->
            <div class="w-full lg:w-2/3">
                <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <div class="p-4 border-b border-gray-50 bg-gray-50/30 flex justify-between items-center gap-4">
                        <div class="relative flex-1">
                            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                            <input type="text" placeholder="ট্যাগ খুঁজুন..." class="w-full pl-11 pr-4 py-2 bg-white border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50/50 border-b border-gray-100">
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">আইডি</th>
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ট্যাগ নাম</th>
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">স্লাগ</th>
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">খবর সংখ্যা</th>
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">অ্যাকশন</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr v-for="(tag, index) in dummyTags" :key="index" class="hover:bg-blue-50/30 transition-colors group">
                                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">#{{ tag.id }}</td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 bg-pink-50 text-pink-700 rounded-lg text-sm font-bold border border-pink-100 group-hover:bg-pink-100 transition-colors">{{ tag.name }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-400 italic">{{ tag.slug }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="px-2.5 py-0.5 bg-gray-100 text-gray-600 rounded-full text-xs font-bold">{{ tag.count }}টি খবর</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <!-- এডিট বাটন: ক্লিক করলে মোডাল খুলবে -->
                                            <button @click="openEditModal(tag)" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition cursor-pointer"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition cursor-pointer"><i class="fa-solid fa-trash-can"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- ৪. এডিট ট্যাগ মোডাল (Popup) -->
        <div v-if="isEditModalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4">
            <!-- ওভারলে -->
            <div @click="isEditModalOpen = false" class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity"></div>
            
            <!-- মোডাল কন্টেন্ট বক্স -->
            <div class="bg-white w-full max-w-md rounded-3xl shadow-2xl z-10 overflow-hidden transform transition-all">
                <div class="bg-[#003557] p-5 text-white flex justify-between items-center">
                    <h3 class="text-xl font-bold flex items-center gap-2">
                        <i class="fa-solid fa-pen-to-square"></i> ট্যাগ আপডেট করুন
                    </h3>
                    <button @click="isEditModalOpen = false" class="hover:bg-white/20 p-2 rounded-full transition cursor-pointer">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                
                <form @submit.prevent class="p-8 space-y-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">ট্যাগের নতুন নাম</label>
                        <input v-model="editingTag.name" type="text" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">স্লাগ / URL</label>
                        <input :value="editingTag.name.toLowerCase().replace(/ /g, '-')" type="text" class="w-full bg-gray-100 border border-gray-200 rounded-2xl px-4 py-3 text-gray-500 outline-none cursor-not-allowed" readonly>
                    </div>
                    <div class="flex gap-3 pt-4">
                        <button type="button" @click="isEditModalOpen = false" class="flex-1 py-3 text-gray-500 font-bold hover:bg-gray-100 rounded-2xl transition cursor-pointer">বাতিল</button>
                        <button type="submit" class="flex-1 bg-[#003557] hover:bg-[#004a7c] text-white py-3 rounded-2xl font-bold shadow-lg transition-all transform active:scale-95 cursor-pointer">আপডেট করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isEditModalOpen: false, // মোডাল শো/হাইড করার জন্য
            editingTag: { name: '' }, // এডিট করার সময় ডাটা রাখার জন্য
            // ডামি ডাটা লুপে দেখানোর জন্য
            dummyTags: [
                { id: 1, name: 'বাজেট ২০২৪', slug: 'budget-2024', count: 45 },
                { id: 2, name: 'বাংলাদেশ ক্রিকেট', slug: 'bd-cricket', count: 120 },
                { id: 3, name: 'মেট্রোরেল', slug: 'metro-rail', count: 88 },
                { id: 4, name: 'ফিলিস্তিন', slug: 'palestine', count: 210 },
                { id: 5, name: 'আবহাওয়া', slug: 'weather', count: 32 }
            ]
        }
    },
    methods: {
        openEditModal(tag) {
            this.editingTag = { ...tag }; // ডামি ডাটা কপি করে এডিট অবজেক্টে নেওয়া
            this.isEditModalOpen = true; // মোডাল ওপেন করা
        }
    }
}
</script>

<style scoped>
.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: #e2e8f0;
    border-radius: 10px;
}
</style>