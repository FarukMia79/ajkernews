<template>
    <div class="w-full flex justify-between gap-7 mb-3">
        <div class="w-[calc(50%-14px)] h-[408px] relative group shadow-md p-1 bg-white">
            <!-- Swiper Component -->
            <swiper :modules="modules" :slides-per-view="1" :loop="true" :speed="800"
                :autoplay="{ delay: 3000, disableOnInteraction: false }" :navigation="{
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                }" class="h-[400px] w-full overflow-hidden">
                <swiper-slide v-for="i in 3" :key="i">
                    <div class="relative w-full h-full[380px]">
                        <img src="../../../public/uploads/post/0.35246415-600x337.jpg"
                            class="w-full h-full object-cover" alt="News">
                        <div class="absolute bottom-0 left-0 w-full bg-black/60 text-white p-6">
                            <h2 class="text-2xl font-bold">বিশ্বকাপের ফাইনালে বাংলাদেশ: পুরো দেশে উৎসবের আমেজ</h2>
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
        <div class="w-[calc(50%-14px)] flex gap-7 h-[408px]">
            <div class="w-1/2">
                <div class="flex text-sm">
                    <button class="w-1/2 bg-[#f0f0f0] py-2 font-bold border-t-3 border-[#7719aa] cursor-pointer">
                        সর্বশেষ সংবাদ
                    </button>
                    <button class="w-1/2 bg-[#d2d5db] py-2 font-bold text-gray-600 cursor-pointer">
                        জনপ্রিয় সংবাদ
                    </button>
                </div>
                <div class="h-[368px] overflow-y-auto border-x-1 border-b-1 border-[#bec9d2] p-2">
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">প্রথম প্রহরে নয়, সিলেটে বিজয় দিবসের অনুষ্ঠান
                            ভোরে</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">সিলেটে সড়ক দুর্ঘটনায় যুবক নিহত</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">রাজশাহীতে ১৫টি স্বর্ণের বারসহ যুবক
                            গ্রেফতার</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">রাজশাহীতে ট্রাকবোঝায় ওএমএসের চাল উদ্ধার</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">রংপুরে পুলিশের সঙ্গে ‘বন্দুকযুদ্ধে’ চরমপন্থী
                            নিহত</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">রংপুরে পার্টিকেল বোর্ড কারখানায় আগুন</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">ময়মনসিংহে প্রতিদিন ১৫টি বিবাহ বিচ্ছেদ</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">৩ ঘণ্টা পর ঢাকা-ময়মনসিংহে ট্রেন চলাচল শুরু
                        </a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">বরিশালে স্কুলছাত্র খুন</a>
                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-[#f00] mt-1"></i>
                        <a href="#" class="text-[15px] hover:text-[#f00]">বরিশালে অভিনব কৌশলে বিদ্যুৎ চুরি</a>
                    </div>
                </div>
            </div>
            <div class="w-1/2 shadow-lg">
                <div>
                    <img src="../../../public/uploads/post/b5ad7e74e5c010d7f52850a38f7a3ad3-5a10328b77874.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between gap-8">
        <img class="flex-1 h-20" src="../../../public/uploads/biggapon/biggapon-1.gif">
        <img class="flex-1 h-20" src="../../../public/uploads/biggapon/biggapon-1.gif">
    </div>

</template>

<script setup>
import { Autoplay, Pagination, Navigation } from 'swiper/modules';
const modules = [Autoplay, Pagination, Navigation];
</script>

<style scoped></style>