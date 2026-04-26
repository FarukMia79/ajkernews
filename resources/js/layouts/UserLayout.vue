<template>
    <div class="bg-[#f2f2f2] min-h-screen">
        <div class="w-full max-w-7xl mx-auto bg-white shadow-xl min-h-screen px-4">

            <Navbar />

            <main>
                <router-view />
            </main>

            <Footer />
        </div>
    </div>
</template>

<script>
import Navbar from '../frontEnd/layout/Navbar.vue';
import Footer from '../frontEnd/layout/Footer.vue';
export default {
    components: {
        Navbar,
        Footer
    }
}
</script>

<style scoped></style>