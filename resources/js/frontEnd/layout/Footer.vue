<template>
    <footer class="bg-[#003557] text-white px-4">
        <div class="grid grid-cols-3 md:grid-cols-6 py-12">
            <div v-for="i in 6" :key="i"
                class="flex flex-col space-y-2 text-base items-center border-r border-[#176495] [&:nth-child(3n)]:border-r-0 md:[&:nth-child(3n)]:border-r md:[&:nth-child(6n)]:border-r-0 my-4">
                <a href="#">আমাদের পরিবার</a>
                <a href="#">ফটো গ্যালারি</a>
                <a href="#">ভিডিও গ্যালারি</a>
            </div>
        </div>
        <div class="grid grid-row-2 md:grid-cols-2 justify-items-center text-lg">
            <div
                class="w-full text-center md:text-end border-b md:border-b-0 md:border-r-2 border-white pr-3 xl:pl-50 pb-3 md:pb-0">
                <p>অফিস : ঢাকা , বাংলাদেশ, মোবাইল নং: ০১৭৯০৬৪৭৯৭৯ ইমেইল: farukmia7979@gmail.com</p>
            </div>
            <div class="w-full text-center md:text-start pl-3 pt-3 md:pt-0 xl:pr-50">
                <p>অফিস : ঢাকা , বাংলাদেশ, মোবাইল নং: ০১৭৯০৬৪৭৯৭৯ ইমেইল: farukmia7979@gmail.com</p>
            </div>
        </div>
        <div class="border-t border-[#176495] py-3 mt-10">
            <p class="text-center text-lg">&copy; 2026 Ajker News. All rights reserved.</p>
        </div>
    </footer>
</template>

<script>
export default {

}
</script>

<style scoped></style>