<template>
    <div class="bg-[#f2f2f2] min-h-screen">
        <div class="w-full max-w-7xl mx-auto bg-white shadow-xl min-h-screen px-4">

            <Navbar />

            <main>
                <router-view />
            </main>

            <!-- ফুটার -->
            <footer class="border-t py-6 text-center text-gray-500">
                &copy; 2024 Ajker News. All rights reserved.
            </footer>
        </div>
    </div>
</template>

<script>
import Navbar from '../frontEnd/layout/Navbar.vue';
export default {
    components: {
        Navbar
    }
}
</script>

<style scoped></style>