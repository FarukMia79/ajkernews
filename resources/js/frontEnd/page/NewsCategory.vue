<template>
    <div class="flex flex-col md:flex-row w-full gap-7">
        <div class="w-full md:w-2/3 mb-7">
            <!-- ক্যাটাগরি -->
            <div class="w-full border-b-2 border-[#666666] text-lg">
                <div class="flex items-center whitespace-nowrap cursor-pointer bg-[#EEEEEE] py-1 px-2">
                    <router-link :to="{ name: 'home' }"><i
                            class="fa-solid fa-house text-[12px] text-[#1879d0] hover:text-[#0d5b88] pr-2"></i></router-link><i
                        class="fa-solid fa-angle-right pr-2"></i>আন্তর্জাতিক
                </div>
            </div>

        </div>

        <!-- সাইডবার -->
        <div class="flex-1">
            <div
                class="w-full sm:h-77.5 md:h-77.5 lg:h-95 xl:h-96.25 2xl:h-105 mb-4 overflow-hidden flex flex-col bg-white">
                <div class="flex text-sm md:text-base lg:text-lg font-bold">
                    <button @click="activeTab = 'latest'" :aria-selected="activeTab === 'latest'"
                        class="w-1/2 aria-selected:border-t-3 aria-selected:border-[#7719aa] aria-selected:bg-[#f0f0f0] bg-[#d2d5db] py-1 aria-selected:text-black text-gray-600 cursor-pointer">
                        সর্বশেষ সংবাদ
                    </button>
                    <button @click="activeTab = 'popular'" :aria-selected="activeTab === 'popular'"
                        class="w-1/2 aria-selected:border-t-3 aria-selected:border-[#7719aa] aria-selected:bg-[#f0f0f0] bg-[#d2d5db] py-1 aria-selected:text-black text-gray-600 cursor-pointer">
                        জনপ্রিয় সংবাদ
                    </button>
                </div>
                <div class=" overflow-y-auto border-x border-b border-[#bec9d2] px-1">
                    <div v-if="activeTab === 'latest'">
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
                    <div v-if="activeTab === 'popular'">
                        <div v-for="i in 8" :key="i" class="flex border-b border-[#bec9d2] py-2 gap-3">
                            <img class="w-42.5 md:w-15.5 lg:w-20.5 xl:w-32.5 h-auto cursor-pointer"
                                src="../../../../public/uploads/post/uk-car-20171119145426-600x337.jpg" alt="news">
                            <div class="flex-1 overflow-hidden pr-2">
                                <a href="#"
                                    class="text-base md:text-base lg:text-lg font-medium display-table w-fit cursor-pointer hover:text-red-600 transition-colors duration-600">২০২৭
                                    সালের মধ্যে চালকবিহীন গাড়ি আনছে নেপাল</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--বিজ্ঞাপন-->
            <div class="w-full mb-7">
                <img class="w-full h-auto" src="../../../../public/uploads/biggapon/ad250-250_ittfw0.gif">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            activeTab: 'latest'
        }
    }
}
</script>

<style scoped></style>