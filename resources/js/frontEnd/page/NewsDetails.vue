<template>
    <div class="flex flex-col md:flex-row w-full gap-7">
        <div class="w-full md:w-2/3">
            <!-- রাজনীতি -->
            <div class="flex w-full justify-center items-center border-b-2 border-[#f00f00] text-lg">
                <div
                    class="flex justify-center items-center whitespace-nowrap cursor-pointer bg-[#f00f00] text-white py-1 px-2">
                    <a>
                        <i class="fa-solid fa-bars"></i>প্রচ্ছদ
                    </a>
                </div>
                <div
                    class="flex justify-center items-center whitespace-nowrap cursor-pointer bg-[#666666] text-white py-1 px-2">
                    <a>
                        <i class="fa-solid fa-bars"></i>রাজনীতি
                    </a>
                </div>
                <div class="flex-1 bg-[#d6effe] text-[#d6effe] py-1">
                    .
                </div>
            </div>

        </div>
        <div class="flex-1">
            <div class="w-full sm:h-77.5 md:h-77.5 lg:h-95 xl:h-96.25 2xl:h-105 overflow-hidden flex flex-col bg-white">
                <div class="flex text-sm md:text-base lg:text-lg font-bold">
                    <button class="w-1/2 bg-[#f0f0f0] py-1 border-t-3 border-[#7719aa] cursor-pointer">
                        সর্বশেষ সংবাদ
                    </button>
                    <button class="w-1/2 bg-[#d2d5db] py-1 text-gray-600 cursor-pointer">
                        জনপ্রিয় সংবাদ
                    </button>
                </div>
                <div class=" overflow-y-auto border-x border-b border-[#bec9d2] px-1">
                    <div v-for="i in 8" :key="i" class="flex border-b border-[#bec9d2] py-2 gap-3">
                        <img class="w-42.5 md:w-15.5 lg:w-20.5 xl:w-32.5 h-auto cursor-pointer"
                            src="../../../../public/uploads/post/parlament-sm-20171120165706.jpg" alt="news">
                        <div class="flex-1 overflow-hidden pr-2">
                            <a href="#"
                                class="text-base md:text-base lg:text-lg font-medium display-table w-fit cursor-pointer hover:text-red-600 transition-colors duration-600">সরকারি
                                অফিসে ৩ লাখ ৬০ হাজার পদ শূন্য</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped></style>