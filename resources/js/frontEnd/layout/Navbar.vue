<template>
    <nav class="flex flex-col">
        <div class="flex justify-between bg-[#faf6f6] items-center border-b-1 border-[#bec9d2] p-0.5">
            <button class="bg-[#0a4466] text-white font-medium text-lg cursor-pointer py-2 px-5">English
                Version</button>
            <div>শনিবার, ২৮ মার্চ ২০২৬, ০৩:৫৫ অপরাহ্ন</div>
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
        <div class="flex justify-between py-6 items-center gap-10">
            <div class="w-[400px] cursor-pointer"><img src="../../../../public/uploads/logo/logo.png"></div>
            <div class="w-[850px]"><img src="../../../../public/uploads/bannar/bannar.gif"></div>
        </div>
        <div class="flex justify-between items-center mb-4">
            <div class="flex">
                <button class="bg-[#0a4466] text-white py-2 pr-12 pl-1">শিরোনাম :</button>
                <div class="w-[1100px] flex items-center bg-[#f1f7fb] px-2">
                    <marquee>
                        <i class=" fa fa-square text-[#991515] px-1"></i><a href="#" class="cursor-pointer">প্রথম প্রহরে
                            নয়, সিলেটে বিজয় দিবসের
                            অনুষ্ঠান ভোরে</a>
                        <i class="fa fa-square text-[#991515] px-1"></i><a href="#" class="cursor-pointer">রাজশাহীতে
                            ১৫টি স্বর্ণের বারসহ যুবক
                            গ্রেফতার</a>
                    </marquee>
                </div>
            </div>
            <div class="flex justify-end-safe">
                <input type="search" placeholder="এখানে লিখুন.."
                    class="border border-[#bec9d2] focus:outline-1 focus:outline-[#1879d0]  py-2 px-2">
                <button
                    class="bg-[#1879d0] text-white hover:bg-[#0a4466] text-base transition duration-500 cursor-pointer py-2 px-4">খুজুন</button>
            </div>
        </div>
        <div class="mb-4 text-base">
            <ul class="flex items-center bg-[#b30e0e]">
                <li class="text-white bg-[#018cc1] border-r border-[#971818] py-2 px-4">প্রচ্ছদ</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">জাতীয়</li>
                <li class="group text-white hover:bg-[#971818] border-r border-[#971818] relative py-2 px-4">
                    সারাদেশে <i class="fa-solid fa-angle-down"></i>
                    <ul class="absolute invisible group-hover:visible w-40 z-10 left-0 top-10 bg-[#b30e0e] shadow-lg">
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
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">আন্তর্জাতিক</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">রাজনীতি</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">অর্থনীতি</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">শিক্ষা</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">খেলাধুলা</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">বিনোদন</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">স্বাস্থ্য</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">তথ্যপ্রযুক্তি</li>
                <li class="text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">চাকরী</li>
                <li class="group relative text-white hover:bg-[#971818] border-r border-[#971818] py-2 px-4">
                    অন্যান্য <i class="fa-solid fa-angle-down"></i>
                    <ul class="absolute invisible group-hover:visible w-40 left-0 top-10 bg-[#b30e0e] shadow-lg">
                        <li
                            class=" text-white hover:bg-[#DCDCDC] hover:text-black border-b border-r border-[#971818] py-2 px-4">
                            আইন-আদালত</li>
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