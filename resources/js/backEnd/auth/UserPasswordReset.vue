<template>
    <div class="max-w-2xl mx-auto p-2 md:p-6">
        <!-- হেডার -->
        <div class="mb-8 text-center">
            <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-key text-2xl text-orange-600"></i>
            </div>
            <h2 class="text-2xl font-black text-gray-800 tracking-tight">পাসওয়ার্ড রিসেট করুন</h2>
            <p class="text-gray-500 mt-2">ইউজার: <span class="font-bold text-gray-700">ফারুক আহমেদ (faruk1@gmail.com)</span></p>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-orange-200/30 border border-orange-100 overflow-hidden">
            <form @submit.prevent class="p-6 md:p-10 space-y-6">
                
                <div class="flex flex-col gap-2 text-lg">
                    <label class="text-sm font-bold text-gray-700 ml-1">নতুন পাসওয়ার্ড</label>
                    <input type="password" placeholder="কমপক্ষে ৮ অক্ষরের পাসওয়ার্ড" 
                           class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all">
                </div>

                <div class="flex flex-col gap-2 text-lg">
                    <label class="text-sm font-bold text-gray-700 ml-1">পাসওয়ার্ড নিশ্চিত করুন</label>
                    <input type="password" placeholder="আবার টাইপ করুন" 
                           class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-orange-500/10 focus:border-orange-500 transition-all">
                </div>

                <!-- সিকিউরিটি টিপস -->
                <div class="bg-blue-50 p-4 rounded-xl flex gap-3 items-start">
                    <i class="fa-solid fa-shield-halved text-blue-500 mt-1"></i>
                    <p class="text-xs text-blue-700 leading-relaxed">
                        একটি শক্তিশালী পাসওয়ার্ডে বড় হাতের অক্ষর, ছোট হাতের অক্ষর, সংখ্যা এবং স্পেশাল ক্যারেক্টার থাকতে হবে।
                    </p>
                </div>

                <!-- বাটন -->
                <div class="pt-4 flex flex-col gap-3">
                    <button class="w-full bg-[#003557] hover:bg-[#004a7c] text-white py-3 rounded-xl font-bold shadow-lg transition-all transform active:scale-95">
                        পাসওয়ার্ড আপডেট করুন
                    </button>
                    <router-link to="/admin/users" class="w-full text-center py-2 text-gray-500 hover:text-gray-800 font-medium transition">
                        ফিরে যান
                    </router-link>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
</style>