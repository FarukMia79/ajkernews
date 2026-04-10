<template>
    <div class="w-full flex flex-col lg:flex-row justify-between gap-7 mb-7">
        <div class="w-full lg:w-1/2 h-[300px] md:h-[408px] lg:h-[380px] relative group shadow-md p-1 bg-white">
            <!-- Swiper Component -->
            <swiper :modules="modules" :slides-per-view="1" :loop="true" :speed="800"
                :autoplay="{ delay: 3000, disableOnInteraction: false }" :navigation="{
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                }" class="h-full w-full">
                <swiper-slide v-for="i in 3" :key="i">
                    <div class="relative w-full h-full">
                        <img src="../../../public/uploads/post/0.35246415-600x337.jpg"
                            class="w-full h-full object-cover" alt="News">
                        <div class="absolute bottom-0 left-0 w-full bg-black/40 text-white px-6 py-2">
                            <h2 class="text-xl md:text-2xl font-medium leading-tight">বিশ্বকাপের ফাইনালে বাংলাদেশ: পুরো
                                দেশে উৎসবের
                                আমেজ</h2>
                        </div>
                    </div>
                </swiper-slide>
            </swiper>

            <!-- Prev Button -->
            <button
                class="custom-prev absolute left-2 top-1/3  z-10 w-10 h-12 flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-angle-left text-white text-3xl"></i>
            </button>

            <!-- Next Button -->
            <button
                class="custom-next absolute right-2 top-1/3 z-10 w-10 h-12 flex items-center justify-center cursor-pointer">
                <i class="fa-solid fa-angle-right text-white text-3xl"></i>
            </button>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col md:flex-row gap-7 h-auto lg:h-[380px]">
            <div class="w-full md:w-1/2 overflow-hidden flex flex-col bg-white">
                <div class="flex text-sm md:text-lg font-bold">
                    <button class="w-1/2 bg-[#f0f0f0] py-2border-t-3 border-[#7719aa] cursor-pointer">
                        সর্বশেষ সংবাদ
                    </button>
                    <button class="w-1/2 bg-[#d2d5db] py-2 text-gray-600 cursor-pointer">
                        জনপ্রিয় সংবাদ
                    </button>
                </div>
                <div class="h-[365px] overflow-y-auto text-lg border-x-1 border-b-1 border-[#bec9d2] p-2">
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">প্রথম প্রহরে নয়, সিলেটে বিজয় দিবসের
                            অনুষ্ঠান
                            ভোরে</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">সিলেটে সড়ক দুর্ঘটনায় যুবক নিহত</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">রাজশাহীতে ১৫টি স্বর্ণের বারসহ যুবক
                            গ্রেফতার</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">রাজশাহীতে ট্রাকবোঝায় ওএমএসের চাল
                            উদ্ধার</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">রংপুরে পুলিশের সঙ্গে ‘বন্দুকযুদ্ধে’
                            চরমপন্থী
                            নিহত</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">রংপুরে পার্টিকেল বোর্ড কারখানায়
                            আগুন</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">ময়মনসিংহে প্রতিদিন ১৫টি বিবাহ
                            বিচ্ছেদ</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">৩ ঘণ্টা পর ঢাকা-ময়মনসিংহে ট্রেন চলাচল
                            শুরু
                        </a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">বরিশালে স্কুলছাত্র খুন</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <a href="#" class="text-base md:text-lg hover:text-[#f00]">বরিশালে অভিনব কৌশলে বিদ্যুৎ চুরি</a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 shadow-lg">
                <div>
                    <img src="../../../public/uploads/post/b5ad7e74e5c010d7f52850a38f7a3ad3-5a10328b77874.jpg">
                </div>
                <div class="py-4 px-2">
                    <h2 class="text-xl md:text-2xl font-medium hover:text-[#337ab7] pb-2">কর দিয়ে দেশের উন্নয়নের একজন
                        অংশীদার আমি</h2>
                    <p class="text-base md:text-lg text-[#333] line-clamp-3">‘সরকার দেশের যে উন্নয়ন করছে, আমি প্রতিবছর
                        আয়কর দিয়ে দেশের সেই
                        উন্নয়নের একজন
                        <button class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</button>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col md:flex-row justify-between gap-7 mb-7">
        <img class="flex-1 h-20 overflow-hidden" src="../../../public/uploads/biggapon/biggapon-1.gif">
        <img class="flex-1 h-20 overflow-hidden" src="../../../public/uploads/biggapon/biggapon-1.gif">
    </div>

    <div class="flex w-full gap-7">
        <div class="w-full lg:w-2/3">
            <div class="flex w-full justify-center items-center border-b-2 border-[#f00f00] text-xl">
                <div class="flex justify-center items-center w-[100px] bg-[#f00f00] text-white py-2 px-1">
                    <a>
                        <i class="fa-solid fa-bars"></i> জাতীয়
                    </a>
                </div>
                <div class="flex-1 bg-[#d6effe] text-[#d6effe] py-2">
                    .
                </div>
            </div>
        </div>
        <div class="hidden lg:block flex-1">
            <div>
                <div class="flex items-center bg-[#f7f7f7] text-[#333] text-lg border-l-5 border-[#f00f00] p-2 mb-2">
                    <h4>ফেসবুকে আমরা...</h4>
                </div>
                <div class="flex items-center bg-[#f7f7f7] text-[#333] text-lg border-l-5 border-[#f00f00] p-2">
                    <h4>পুরাতন খবর</h4>
                </div>
            </div>

        </div>
    </div>

</template>

<script setup>
import { Autoplay, Pagination, Navigation } from 'swiper/modules';
const modules = [Autoplay, Pagination, Navigation];
</script>

<style scoped></style>