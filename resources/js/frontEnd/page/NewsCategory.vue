<template>
    <div class="flex flex-col md:flex-row w-full gap-7">
        <div class="w-full md:w-2/3 mb-5">
            <!-- ক্যাটাগরি -->
            <div class="w-full border-b-2 border-[#666666] text-lg">
                <div class="flex items-center whitespace-nowrap cursor-pointer bg-[#EEEEEE] py-1 px-2">
                    <router-link :to="{ name: 'home' }"><i
                            class="fa-solid fa-house text-[12px] text-[#1879d0] hover:text-[#0d5b88] pr-2"></i></router-link><i
                        class="fa-solid fa-angle-right pr-2"></i>আন্তর্জাতিক
                </div>
            </div>

            <!-- সংবাদ -->
            <div class="w-full flex flex-col md:flex-row gap-7">
                <div class="w-full md:w-2/3 mt-4">
                    <div class="w-full group overflow-hidden">
                        <div class="w-full h-full overflow-hidden">
                            <router-link :to="{ name: 'newsDetails' }">
                                <img src="../../../../public/uploads/post/argentina-submerin-20171119145954-600x337.jpg"
                                    class="w-full transition-transform duration-600 group-hover:scale-120">
                            </router-link>
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-xl md:text-2xl font-medium transition-colors duration-600 text-[#337ab7] hover:text-[#971818] inline">সংকেত
                                মিলেছে আর্জেন্টিনার নিখোঁজ সাবমেরিনের</a>
                            <p class="text-base md:text-lg text-[#333] pt-2 line-clamp-3 md:line-clamp-9">আর্জেন্টিনার
                                দক্ষিণ উপকূলে
                                নিখোঁজ হওয়া সাবমেরিনের সংকেত মিলেছে স্যাটেলাইটের মাধ্যমে। বুধবার সকালে নিখোঁজ হওয়া ওই
                                সাবমেরিনটিতে ৪৪ জন আরোহী ছিলেন। খবর বিবিসি। কর্মকর্তারা বলছেন, স্যাটেলাইটের মাধ্যমে
                                সাবমেরিনের যে সংকেত পাওয়া<a href="#"
                                    class="text-[#337ab7] hover:text-[#971818] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <div v-for="i in 2" :key="i" class="w-full group overflow-hidden">
                        <img src="../../../../public/uploads/post/uk-car-20171119145426-600x337.jpg"
                            class="w-full h-auto mt-4 group-hover:scale-105 transition-transform duration-600 cursor-pointer">
                        <h2 class="text-lg font-medium text-[#337ab7] hover:text-[#971818] mt-2">
                            <a href="#" class="cursor-pointer">২০২৭ সালের মধ্যে চালকবিহীন গাড়ি আনছে নেপাল</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-7 mb-7">
                <div v-for="i in 3" :key="i" class="w-full group overflow-hidden">
                    <img src="../../../../public/uploads/post/uk-car-20171119145426-600x337.jpg"
                        class="w-full h-auto mt-4 group-hover:scale-105 transition-transform duration-600 cursor-pointer">
                    <h2 class="text-lg font-medium text-[#337ab7] hover:text-[#971818] mt-2">
                        <a href="#" class="cursor-pointer">২০২৭ সালের মধ্যে চালকবিহীন গাড়ি আনছে নেপাল</a>
                    </h2>
                </div>
            </div>

            <div v-for="i in 4" :key="i" class="w-full flex flex-col md:flex-row bg-[#EDF3F5] px-5 py-2 mb-2 gap-0 md:gap-7">
                <div class="w-full md:w-1/3">
                    <img class="w-full h-auto" src="../../../../public/uploads/post/mugabe-20171120135602.jpg" alt="news">
                </div>
                <div class="w-full p-2">
                    <a href="#"
                        class="text-xl md:text-2xl font-medium transition-colors duration-600 text-[#337ab7] hover:text-[#971818] inline">‘পদত্যাগে
                        রাজি হয়েছেন মুগাবে’</a>
                    <p class="text-base md:text-lg text-[#333] pt-2 line-clamp-3 md:line-clamp-9">‘জিম্বাবুয়ের নেতা
                        রবার্ট মুগাবে প্রেসিডেন্ট পদ থেকে পদত্যাগে রাজি হয়েছেন। এ জন্য তিনি একটি খসড়া চিঠিও প্রস্তুত
                        করেছেন।’ সেনাবাহিনীর সঙ্গে মুগাবের পদত্যাগ আলোচনার সঙ্গে সরাসরি সংশ্লিষ্ট জিম্বাবুয়ের এক
                        কর্মকর্তার বরাত</p><a href="#"
                        class="bg-[#337ab7] hover:bg-[#971818] transition-all duration-1000 ease-in-out px-1 hover:pl-2.5 rounded-md text-white cursor-pointer py-2px">বিস্তারিত...</a>
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
import { h } from 'vue';

export default {
    data() {
        return {
            activeTab: 'latest'
        }
    }
}
</script>

<style scoped></style>