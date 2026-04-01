<template>
    <div class="bg-[#f2f2f2]">
        <div class="container mx-auto px-4 shadow-xl/30 bg-white">
            <Navbar />
            <main><router-view /></main>
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