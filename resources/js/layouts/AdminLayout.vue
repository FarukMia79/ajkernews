<template>
    <div class="flex h-screen bg-gray-100 font-sans overflow-hidden">

        <div v-if="isSidebarOpen" @click="isSidebarOpen = false"
            class="fixed inset-0 z-20 bg-black/50 transition-opacity lg:hidden">
        </div>

        <SideBar :isOpen="isSidebarOpen" />

        <div class="flex-1 flex flex-col overflow-hidden w-full">
            <Navbar @toggle-sidebar="isSidebarOpen = !isSidebarOpen" />

            <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 md:p-6">
                <router-view />
            </main>
        </div>
    </div>
</template>

<script>
import Navbar from '../backEnd/layout/Navbar.vue';
import SideBar from '../backEnd/layout/SideBar.vue';
export default {
    data() {
        return {
            isSidebarOpen: false
        }
    },
    components: {
        Navbar,
        SideBar
    }
}
</script>

<style scoped></style>