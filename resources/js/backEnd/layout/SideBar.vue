<template>
    <aside :class="isOpen ? 'translate-x-0' : '-translate-x-full'"
        class="fixed inset-y-0 left-0 z-30 w-64 bg-[#003557] text-white transition-transform duration-300 transform lg:translate-x-0 lg:static lg:inset-0 flex flex-col shadow-xl border-r border-white/5 font-sans">

        <!-- লোগো সেকশন -->
        <div class="p-6 text-2xl font-black border-b border-white/10 flex justify-between items-center tracking-wider">
            <span>AJKER<span class="text-red-500">NEWS</span></span>
        </div>

        <!-- নেভিগেশন লিস্ট -->
        <nav class="flex-1 p-4 space-y-1 mt-2 overflow-y-auto custom-scrollbar">
            
            <!-- ১. মূল ড্যাশবোর্ড -->
            <router-link to="/admin" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-gauge w-5 text-blue-400"></i> ড্যাশবোর্ড
            </router-link>

            <!-- ২. কন্টেন্ট ম্যানেজমেন্ট -->
            <div class="pt-6 pb-2 px-3 text-[10px] font-black text-gray-500 uppercase tracking-[2px]">কন্টেন্ট ম্যানেজমেন্ট</div>
            
            <router-link to="/admin/news" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-newspaper w-5 text-yellow-400"></i> সব খবর (News List)
            </router-link>

            <router-link to="/admin/news/create" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-pen-nib w-5 text-red-400"></i> নতুন খবর লিখুন
            </router-link>

            <router-link to="/admin/categories" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-layer-group w-5 text-green-400"></i> ক্যাটাগরি
            </router-link>

            <router-link to="/admin/sub-categories" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-list-check w-5 text-purple-400"></i> সাব ক্যাটাগরি
            </router-link>

            <router-link to="/admin/divisions" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-earth-asia w-5 text-purple-400"></i> বিভাগ
            </router-link>

            <router-link to="/admin/tags" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-tags w-5 text-pink-400"></i> নিউজ ট্যাগ (Tags)
            </router-link>

            <!-- ৩. মিডিয়া গ্যালারি -->
            <div class="pt-6 pb-2 px-3 text-[10px] font-black text-gray-500 uppercase tracking-[2px]">মিডিয়া গ্যালারি</div>
            
            <router-link to="/admin/photo-gallery" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-images w-5 text-cyan-400"></i> ফটো গ্যালারি
            </router-link>

            <router-link to="/admin/video-gallery" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-circle-play w-5 text-red-500"></i> ভিডিও গ্যালারি
            </router-link>

            <!-- ৪. ইউজার ইন্টারঅ্যাকশন -->
            <div class="pt-6 pb-2 px-3 text-[10px] font-black text-gray-500 uppercase tracking-[2px]">ইউজার অ্যাকশন</div>
            
            <router-link to="/admin/comments" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-comments w-5 text-blue-400"></i> খবরের মন্তব্য
            </router-link>

            <router-link to="/admin/messages" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-envelope w-5 text-indigo-400"></i> কন্টাক্ট মেসেজ
            </router-link>

            <!-- ৫. মার্কেটিং ও বিজ্ঞাপন -->
            <div class="pt-6 pb-2 px-3 text-[10px] font-black text-gray-500 uppercase tracking-[2px]">মার্কেটিং</div>

            <router-link to="/admin/advertisements" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-rectangle-ad w-5 text-orange-400"></i> বিজ্ঞাপন (Ads)
            </router-link>

            <router-link to="/admin/polls" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-square-poll-vertical w-5 text-green-500"></i> অনলাইন জরিপ
            </router-link>

            <!-- ৬. অ্যাক্সেস কন্ট্রোল ও সেটিংস -->
            <div class="pt-6 pb-2 px-3 text-[10px] font-black text-gray-500 uppercase tracking-[2px]">সিস্টেম</div>

            <router-link to="/admin/users" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-user-gear w-5 text-gray-300"></i> ইউজার লিস্ট
            </router-link>

            <router-link to="/admin/settings" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-gears w-5 text-gray-400"></i> জেনারেল সেটিংস
            </router-link>

            <router-link to="/admin/settings/seo" 
                class="flex items-center gap-3 p-3 rounded-xl transition-all duration-200 text-[14px] font-medium text-gray-300 hover:text-white hover:bg-white/10"
                active-class="bg-blue-600/20 !text-white border-l-4 border-blue-500 !rounded-none !rounded-r-xl">
                <i class="fa-solid fa-earth-americas w-5 text-green-300"></i> এসইও সেটিংস
            </router-link>

        </nav>

        <!-- লগআউট বাটন -->
        <div class="p-4 border-t border-white/10 bg-black/10">
            <button @click="logout" class="w-full text-left p-3 text-red-400 hover:bg-red-500/10 rounded-xl transition cursor-pointer flex items-center gap-3 font-bold">
                <i class="fa-solid fa-right-from-bracket"></i> লগআউট
            </button>
        </div>
    </aside>
</template>

<script>
import AppStorage from '../../Helpers/AppStorage';
export default {
    data() {
        return {
            isOpen: false
        }
    },

    methods: {
        logout() {
            axios.post('/api/admin/logout')
                .then(response => {
                    AppStorage.clear();
                    this.$router.push({name: 'adminLogin'});
                })
                .catch(error => {
                    Notification.error('Something went wrong');
                });
        }
    }
}
</script>

<style scoped>
.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}
</style>