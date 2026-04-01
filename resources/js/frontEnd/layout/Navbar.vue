<template>
    <nav class="flex flex-col">
        <div class="flex justify-between bg-[#faf6f6] items-center border-b-1 border-[#bec9d2] p-0.5">
            <button class="bg-[#0a4466] text-white font-medium text-lg cursor-pointer py-2 px-5">English
                Version</button>
            <div>শনিবার, ২৮ মার্চ ২০২৬, ০৩:৫৫ অপরাহ্ন</div>
            <div class="flex gap-2 items-center">
                <a href="#">
                    <i class="fa fa-facebook bg-[#0a4466] text-white rounded-full cursor-pointer px-4 py-3"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter bg-[#00acee] text-white rounded-full cursor-pointer px-3 py-3"></i>
                </a>
            </div>
        </div>
        <div class="flex justify-between py-6 items-center gap-10">
            <div class="w-[400px] cursor-pointer"><img src="../../../../public/uploads/logo/logo.png"></div>
            <div class="w-[850px]"><img src="../../../../public/uploads/bannar/bannar.gif"></div>
        </div>
        <div class="flex justify-between items-center mb-4">
            <div class="flex">
                <button class="bg-[#0a4466] text-white py-1 pr-12 pl-1">শিরোনাম :</button>
                <div class="w-[1100px] bg-[#f1f7fb] pt-1.5 px-2">
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
                    class="border border-[#bec9d2] focus:outline-1 focus:outline-[#1879d0]  py-1 px-2">
                <button
                    class="bg-[#1879d0] text-white hover:bg-[#0a4466] transition duration-500 cursor-pointer py-1 px-4">খুজুন</button>
            </div>
        </div>
    </nav>
</template>

<script>
export default {

}
</script>

<style scoped></style>