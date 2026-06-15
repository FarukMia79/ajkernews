<template>
    <aside :class="isOpen ? 'translate-x-0' : '-translate-x-full'"
        class="fixed inset-y-0 left-0 z-30 w-64 bg-[#003557] text-white transition-transform duration-300 transform lg:translate-x-0 lg:static lg:inset-0 flex flex-col shadow-xl">

        <div class="p-6 text-2xl font-bold border-b border-white/10 flex justify-between items-center">
            Admin Panel
        </div>

        <nav class="flex-1 p-4 space-y-2 mt-4 overflow-y-auto">
            <router-link to="/admin" class="flex items-center gap-3 p-3 rounded hover:bg-white/10">
                <i class="fa-solid fa-gauge"></i> ড্যাশবোর্ড
            </router-link>
            <router-link to="/admin/news" class="flex items-center gap-3 p-3 rounded hover:bg-white/10 transition">
                <i class="fa-solid fa-newspaper w-5"></i> নিউজ ম্যানেজমেন্ট
            </router-link>
            <router-link to="/admin/categories"
                class="flex items-center gap-3 p-3 rounded hover:bg-white/10 transition">
                <i class="fa-solid fa-list w-5"></i> ক্যাটাগরি
            </router-link>
            <router-link to="/admin/categories"
                class="flex items-center gap-3 p-3 rounded hover:bg-white/10 transition">
                <i class="fa-solid fa-list w-5"></i> সাব ক্যাটাগরি
            </router-link>
            <router-link to="/admin/users" class="flex items-center gap-3 p-3 rounded hover:bg-white/10 transition">
                <i class="fa-solid fa-users w-5"></i> ইউজার লিস্ট
            </router-link>
        </nav>
        <div class="p-4 border-t border-white/10">
            <button class="w-full text-left p-3 text-red-400 hover:bg-red-500/10 rounded transition cursor-pointer">
                <i class="fa-solid fa-right-from-bracket mr-2"></i> লগআউট
            </button>
        </div>
    </aside>
</template>

<script>
export default {
    data() {
        return {
            
        }
    },
    props: {
        isOpen: {
            type: Boolean,
            default: false
        }
    }

}
</script>

<style scoped></style>