<template>
    <nav class="flex flex-col">
        <div
            class="flex flex-col md:flex-row justify-between bg-[#faf6f6] items-center border-b border-[#bec9d2] p-1 gap-2">
            <button
                class="bg-[#0a4466] text-white font-medium text-base md:text-lg cursor-pointer py-2 px-5 w-full md:w-auto">English
                Version</button>
            <div class="text-sm md:text-lg text-center">
                <p>শনিবার, ২৮ মার্চ ২০২৬, ০৩:৫৫ অপরাহ্ন</p>
            </div>
            <div class="flex gap-2 items-center">
                <div class="bg-[#0a4466] flex justify-center items-center rounded-full w-9 h-9">
                    <a href="#">
                        <i class="fa-brands fa-facebook-f  text-white cursor-pointer"></i>
                    </a>
                </div>
                <div class="bg-[#00acee] flex justify-center items-center rounded-full w-9 h-9">
                    <a href="#">
                        <i class="fa-brands fa-twitter  text-white cursor-pointer"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-between py-6 items-center gap-6 md:gap-10">
            <div class="w-full md:w-1/3 cursor-pointer">
                <router-link :to="{ name: 'home' }">
                    <img src="../../../../public/uploads/logo/logo.png" class="mx-auto md:mx-0">
                </router-link>
            </div>
            <div class="w-full md:w-2/3 hidden md:block">
                <img src="../../../../public/uploads/bannar/bannar.jpeg" class="w-full">
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-between items-stretch mb-4 gap-2">
            <div class="flex flex-1 w-full text-lg">
                <button class="bg-[#0a4466] text-white py-2 px-4 whitespace-nowrap">শিরোনাম :</button>
                <div
                    class="flex-1 flex items-center bg-[#f1f7fb] px-2 overflow-hidden border-y border-r border-[#bec9d2] lg:border-none">
                    <marquee>
                        <i class=" fa fa-square text-[#991515]"></i><a href="#" class="cursor-pointer px-1">প্রথম প্রহরে
                            নয়, সিলেটে বিজয় দিবসের
                            অনুষ্ঠান ভোরে</a>
                        <i class="fa fa-square text-[#991515]"></i><a href="#" class="cursor-pointer px-1">রাজশাহীতে
                            ১৫টি স্বর্ণের বারসহ যুবক
                            গ্রেফতার</a>
                    </marquee>
                </div>
            </div>
            <div class="flex w-full md:w-auto text-lg">
                <input type="search" placeholder="এখানে লিখুন.."
                    class="flex-1 md:w-64 border border-[#bec9d2] focus:outline-none focus:ring-1 focus:ring-[#1879d0] py-2 px-2">
                <button
                    class="bg-[#1879d0] text-white hover:bg-[#0a4466] transition py-2 px-6 cursor-pointer">খুজুন</button>
            </div>
        </div>
        <div class="mb-4 text-lg">
            <ul class="flex flex-wrap items-center bg-[#b30e0e] w-full">
                <li class="text-white bg-[#018cc1] border-r border-[#971818] py-2 px-4">প্রচ্ছদ</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">জাতীয়</li>
                <li class="group text-white hover:bg-[#971818] border-r border-[#971818] relative py-2 px-4">
                    সারাদেশে <i class="fa-solid fa-angle-down"></i>
                    <ul class="absolute invisible group-hover:visible w-40 z-10 left-0 top-full bg-[#b30e0e] shadow-lg">
                        <li
                            class=" text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            ঢাকা বিভাগ</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            সিলেট বিভাগ</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            চট্টগ্রাম বিভাগ
                        </li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            খুলনা বিভাগ</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            বরিশাল বিভাগ</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            রাজশাহী বিভাগ</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            ময়মনসিংহ বিভাগ
                        </li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            রংপুর বিভাগ</li>
                    </ul>
                </li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4"><router-link
                        :to="{ name: 'newsCategory' }">আন্তর্জাতিক</router-link></li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">রাজনীতি</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">অর্থনীতি</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">শিক্ষা</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">খেলাধুলা</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">বিনোদন</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">তথ্যপ্রযুক্তি</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">চাকরী</li>
                <li class="group relative text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">
                    অন্যান্য <i class="fa-solid fa-angle-down"></i>
                    <ul class="absolute invisible group-hover:visible z-10 w-40 left-0 top-full bg-[#b30e0e] shadow-lg">
                        <li
                            class=" text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            আইন-আদালত</li>
                        <li
                            class=" text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            স্বাস্থ্য</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            গণমাধ্যম</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            ক্যাম্পাস
                        </li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            ধর্ম</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            প্রবাস</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            ফিচার</li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            ভ্রমণ
                        </li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            মতামত
                        </li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            মুক্তমত
                        </li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            সম্পাদকীয়
                        </li>
                        <li
                            class="text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            সাহিত্য
                        </li>
                    </ul>
                </li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">আমাদের পরিবার</li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {

}
</script>

<style scoped></style>