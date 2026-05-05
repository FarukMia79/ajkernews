<template>
    <div class="container mx-auto">
        <div class="bg-white shadow-xl px-4 min-h-screen">

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