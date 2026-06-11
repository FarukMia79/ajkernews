<template>
    <header class="h-16 bg-white border-b flex items-center justify-between px-4 md:px-8 shadow-sm">
        <div class="flex items-center gap-3 text-gray-600">
            <button @click="$emit('toggle-sidebar')" class="lg:hidden p-2 rounded-md hover:bg-gray-100 cursor-pointer">
                <i class="fa-solid fa-bars text-xl text-gray-600"></i>
            </button>
            <h2 class="text-xl font-semibold">স্বাগতম, অ্যাডমিন</h2>
        </div>

        <div class="flex items-center gap-4">
            <button class="text-gray-500 hover:text-blue-600 transition">
                <i class="fa-regular fa-bell text-xl"></i>
            </button>

            <div class="flex items-center gap-3 cursor-pointer group">
                <div class="text-right hidden md:block">
                    <p class="text-sm font-bold text-gray-700 leading-none">ফারুক</p>
                    <span class="text-xs text-gray-500">Super Admin</span>
                </div>
                <img class="w-10 h-10 rounded-full border-2 border-blue-500"
                    src="https://ui-avatars.com/api/?name=Admin" alt="Profile">
            </div>
        </div>
    </header>
</template>

<script>

export default {

}
</script>

<style scoped></style>