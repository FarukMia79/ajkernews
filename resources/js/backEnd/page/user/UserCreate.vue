<template>
    <div class="max-w-4xl mx-auto p-2 md:p-6">
        <!-- হেডার -->
        <div class="flex justify-between items-center mb-8 bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
            <div>
                <h2 class="text-2xl font-black text-gray-800 tracking-tight">ইউজার প্রোফাইল তৈরি</h2>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/users" class="hover:text-blue-600">ইউজার লিস্ট</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">ইউজার তৈরি</span>
                </nav>
            </div>
            <router-link to="/admin/users" class="p-2.5 bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                <i class="fa-solid fa-arrow-left"></i>
            </router-link>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <form @submit.prevent class="p-6 md:p-10 space-y-8">
                
                <!-- প্রোফাইল পিকচার সেকশন -->
                <div class="flex flex-col items-center pb-8 border-b border-gray-50">
                    <div class="relative group">
                        <img src="https://ui-avatars.com/api/?name=Faruk+Ahmed&size=128&background=random" 
                             class="w-32 h-32 rounded-full border-4 border-white shadow-lg object-cover">
                        <label class="absolute bottom-0 right-0 bg-[#003557] text-white p-2 rounded-full cursor-pointer hover:bg-blue-600 shadow-md transition transform group-hover:scale-110">
                            <i class="fa-solid fa-camera text-sm"></i>
                            <input type="file" class="hidden">
                        </label>
                    </div>
                    <p class="mt-3 text-xs text-gray-400 font-bold uppercase tracking-widest">প্রোফাইল ছবি পরিবর্তন</p>
                </div>

                <!-- ইউজার ইনফো গ্রিড -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">পূর্ণ নাম</label>
                        <input type="text" value="ফারুক আহমেদ" 
                               class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                    </div>
                    <div class="flex flex-col gap-2 text-lg">
                        <label class="text-sm font-bold text-gray-700 ml-1">ইমেইল ঠিকানা</label>
                        <input type="email" value="faruk1@gmail.com" 
                               class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col gap-2 text-lg">
                        <label class="text-sm font-bold text-gray-700 ml-1">ইউজার রোল (Role)</label>
                        <select class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                            <option value="admin" selected>Admin</option>
                            <option value="editor">Editor</option>
                            <option value="reporter">Reporter</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 text-lg">
                        <label class="text-sm font-bold text-gray-700 ml-1">অ্যাকাউন্ট স্ট্যাটাস</label>
                        <select class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                            <option value="active" selected>অ্যাক্টিভ (Active)</option>
                            <option value="inactive">নিষ্ক্রিয় (Inactive)</option>
                        </select>
                    </div>
                </div>

                <!-- বাটন -->
                <div class="pt-6 border-t border-gray-50 flex justify-end gap-4">
                    <button class="px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition">বাতিল</button>
                    <button class="bg-[#003557] hover:bg-[#004a7c] text-white px-10 py-3 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center gap-2">
                        <i class="fa-solid fa-user-check"></i> ইউজার তৈরি করুন
                    </button>
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