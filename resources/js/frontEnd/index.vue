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
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">প্রথম প্রহরে
                                নয়, সিলেটে বিজয়
                                দিবসের
                                অনুষ্ঠান
                                ভোরে</a>
                        </div>

                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">সিলেটে সড়ক
                                দুর্ঘটনায় যুবক নিহত</a>
                        </div>

                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">রাজশাহীতে
                                ১৫টি স্বর্ণের বারসহ যুবক
                                গ্রেফতার</a>
                        </div>

                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">রাজশাহীতে
                                ট্রাকবোঝায় ওএমএসের চাল
                                উদ্ধার</a>
                        </div>

                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">রংপুরে
                                পুলিশের সঙ্গে ‘বন্দুকযুদ্ধে’
                                চরমপন্থী
                                নিহত</a>
                        </div>

                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">রংপুরে
                                পার্টিকেল বোর্ড কারখানায়
                                আগুন</a>
                        </div>

                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">ময়মনসিংহে
                                প্রতিদিন ১৫টি বিবাহ
                                বিচ্ছেদ</a>
                        </div>

                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">৩ ঘণ্টা পর
                                ঢাকা-ময়মনসিংহে ট্রেন চলাচল
                                শুরু
                            </a>
                        </div>

                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">বরিশালে
                                স্কুলছাত্র খুন</a>
                        </div>

                    </div>
                    <div class="border-b-1 border-[#bec9d2] py-2 flex items-start gap-2">
                        <i class="fa fa-angle-double-right text-sm text-[#f00] mt-1"></i>
                        <div class="flex-1 overflow-hidden">
                            <a href="#" class="display-table w-fit text-base md:text-lg hover:text-[#f00]">বরিশালে অভিনব
                                কৌশলে বিদ্যুৎ চুরি</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="group w-full md:w-1/2 shadow-lg overflow-hidden">
                <div class="overflow-hidden">
                    <img class="w-full h-full transition-transform duration-600 group-hover:scale-120"
                        src="../../../public/uploads/post/b5ad7e74e5c010d7f52850a38f7a3ad3-5a10328b77874.jpg">
                </div>
                <div class="py-4 px-2">
                    <h2
                        class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] pb-2">
                        কর দিয়ে দেশের উন্নয়নের একজন
                        অংশীদার আমি</h2>
                    <p class="text-sm md:text-base text-[#333] line-clamp-3">‘সরকার দেশের যে উন্নয়ন করছে, আমি প্রতিবছর
                        আয়কর দিয়ে দেশের সেই
                        উন্নয়নের একজন
                        <a href="#" class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--বিজ্ঞাপন-->
    <div class="w-full flex flex-col md:flex-row justify-between gap-7 mb-7">
        <img class="flex-1 h-20 overflow-hidden" src="../../../public/uploads/biggapon/biggapon-1.gif">
        <img class="flex-1 h-20 overflow-hidden" src="../../../public/uploads/biggapon/biggapon-1.gif">
    </div>

    <div class="flex w-full gap-7">
        <div class="w-full md:w-2/3">

            <!-- জাতীয় -->
            <div class="flex w-full justify-center items-center border-b-2 border-[#f00f00] text-xl">
                <div
                    class="flex justify-center items-center whitespace-nowrap cursor-pointer bg-[#f00f00] text-white p-2">
                    <a>
                        <i class="fa-solid fa-bars"></i> জাতীয়
                    </a>
                </div>
                <div class="flex-1 bg-[#d6effe] text-[#d6effe] py-2">
                    .
                </div>
            </div>
            <div class="w-full mb-7">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-7 w-full">
                    <div v-for="i in 8" :key="i" class="flex border-b-1 border-[#bec9d2] py-2 gap-3">
                        <img class="w-[170px] md:w-[130px] h-auto cursor-pointer"
                            src="../../../public/uploads/post/parlament-sm-20171120165706.jpg">
                        <div class="flex-1 overflow-hidden">
                            <a href="#"
                                class="display-table w-fit text-base md:text-lg cursor-pointer hover:text-red-600 transition-colors duration-600">সরকারি
                                অফিসে ৩ লাখ ৬০ হাজার পদ শূন্য</a>
                        </div>

                    </div>
                </div>
            </div>

            <!--বিজ্ঞাপন-->
            <div class="w-full mb-7">
                <img class="w-full h-auto" src="../../../public/uploads/biggapon/biggapon-1.gif">
            </div>

            <!-- আন্তর্জাতিক -->
            <div class="flex w-full items-center border-b-2 border-[#f00f00] text-xl">
                <div class="whitespace-nowrap cursor-pointer bg-[#f00f00] text-white p-2">
                    <a href="#">
                        <i class="fa-solid fa-bars"></i> আন্তর্জাতিক
                    </a>
                </div>
                <div class="flex-1 bg-[#d6effe] text-[#d6effe] py-2">
                    .
                </div>
            </div>
            <div class="w-full mb-7">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-7 gap-y-2 w-full">
                    <div v-for="i in 6" :key="i" class="group overflow-hidden shadow-lg/5 py-2">
                        <div class="w-full h-auto overflow-hidden">
                            <img class="w-full h-full cursor-pointer object-cover transition-transform duration-600 group-hover:scale-120"
                                src="../../../public/uploads/post/uk-car-20171119145426-600x337.jpg">
                        </div>
                        <div class="p-2">
                            <a href="#"
                                class="text-base md:text-lg cursor-pointer hover:text-red-600 transition-colors duration-600">২০২৭
                                সালের মধ্যে চালকবিহীন গাড়ি আনছে নেপাল</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full mb-7">
                <img class="w-full h-auto" src="../../../public/uploads/biggapon/biggapon-1.gif">
            </div>

            <!--রাজনীতি এবং অর্থনীতি-->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                <!--রাজনীতি ক্যাটাগরি-->
                <div>
                    <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                        <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                            <a>
                                <i class="fa-solid fa-bars pr-2"></i>রাজনীতি
                            </a>
                        </div>
                        <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                    </div>
                    <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                        <div class="w-full h-full overflow-hidden">
                            <img src="../../../public/uploads/post/bnp-20171120133207.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">‘প্রধানমন্ত্রী
                                পদত্যাগ করলে জনগণও তাকে ক্ষমা করে দেবে’</a>
                            <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">প্রধানমন্ত্রী শেখ হাসিনাকে
                                বিএনপি চেয়ারপারসন বেগম খালেদা জিয়া ক্ষমা করেছেন, আমরাও ক্ষমা করে দেব। কিন্তু<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex text-lg font-medium border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/tarek-20171119104531-600x337.jpg"
                                    class="w-[120px] h-auto cursor-pointer flex-shrink-0">

                                <div class="flex-1 overflow-hidden">

                                    <a href="#"
                                        class="display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
                                        তারেকের জন্মদিনে কেক কাটবেন খালেদা
                                    </a>

                                </div>

                            </div>
                            <div
                                class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                                <span class="text-base cursor-pointer">আরো খবর..</span>
                                <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                            </div>

                        </div>
                    </div>
                </div>


                <!--অর্থনীতি ক্যাটাগরি-->
                <div>
                    <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                        <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                            <a>
                                <i class="fa-solid fa-bars pr-2"></i>অর্থনীতি
                            </a>
                        </div>
                        <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                    </div>
                    <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                        <div class="w-full h-full overflow-hidden">
                            <img src="../../../public/uploads/post/faika-20171118215621-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">উত্তরায়
                                ফায়কা বুটিকসের যাত্রা শুরু</a>
                            <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">দেশীয় পোশাকের সমাহারে রাজধানী
                                উত্তরার ৪ নম্বর সেক্টরে যাত্রা শুরু করলো ফায়কা ওম্যানস ক্লথিং বুটিকস।<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex text-lg font-medium border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/hsbc-20171118034650.jpg"
                                    class="w-[120px] h-auto cursor-pointer flex-shrink-0">

                                <div class="flex-1 overflow-hidden">

                                    <a href="#"
                                        class="display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
                                        পাঁচ প্রতিষ্ঠানকে রফতানির স্বীকৃতি দিল এইচএসবিসি
                                    </a>

                                </div>

                            </div>
                            <div
                                class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                                <span class="text-base cursor-pointer">আরো খবর..</span>
                                <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!--আইন-আদালত এবং তথ্যপ্রযুক্তি-->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                <!--আইন-আদালত ক্যাটাগরি-->
                <div>
                    <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                        <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                            <a>
                                <i class="fa-solid fa-bars pr-2"></i>আইন-আদালত
                            </a>
                        </div>
                        <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                    </div>
                    <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                        <div class="w-full h-full overflow-hidden">
                            <img src="../../../public/uploads/post/bank-20171120143438.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">সোনালী
                                ব্যাংকের তিন পদের নিয়োগ আপাতত স্থগিত</a>
                            <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">সোনালী ব্যাংকের সিনিয়র অফিসার,
                                অফিসার ও অফিসার (ক্যাশ) পদে নিয়োগ আপাতত স্থগিত থাকবে বলে আদেশ<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex text-lg font-medium border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/nurse-20171117193636.jpg"
                                    class="w-[120px] h-auto cursor-pointer flex-shrink-0">

                                <div class="flex-1 overflow-hidden">

                                    <a href="#"
                                        class="display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
                                        প্রশ্ন ফাঁস : ঢামেকের দুই নার্স তিন দিনের রিমান্ডে
                                    </a>

                                </div>

                            </div>
                            <div
                                class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                                <span class="text-base cursor-pointer">আরো খবর..</span>
                                <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                            </div>

                        </div>
                    </div>
                </div>


                <!--তথ্যপ্রযুক্তি ক্যাটাগরি-->
                <div>
                    <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                        <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                            <a>
                                <i class="fa-solid fa-bars pr-2"></i>তথ্যপ্রযুক্তি
                            </a>
                        </div>
                        <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                    </div>
                    <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                        <div class="w-full h-full overflow-hidden">
                            <img src="../../../public/uploads/post/mobile-20171114133119-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">দেশে
                                মোবাইল ফোন গ্রাহক ১৪ কোটি ছাড়িয়েছে
                            </a>
                            <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">প্রায় ১৭ কোটি জনসংখ্যার
                                বাংলাদেশের মানুষের হাতে ১৪ কোটি ৭ লাখ ১৩ হাজার মোবাইল সিম রয়েছে। যাদের মধ্যে<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex text-lg font-medium border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/robot-1-20171115175624-600x337.jpg"
                                    class="w-[120px] h-auto cursor-pointer flex-shrink-0">

                                <div class="flex-1 overflow-hidden">

                                    <a href="#"
                                        class="display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
                                        বাংলাদেশে রোবট রেস্টুরেন্টের যাত্রা শুরু
                                    </a>

                                </div>

                            </div>
                            <div
                                class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                                <span class="text-base cursor-pointer">আরো খবর..</span>
                                <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--বিজ্ঞাপন-->
            <div class="w-full mb-7">
                <img class="w-full h-auto" src="../../../public/uploads/biggapon/biggapon-1.gif">
            </div>

            <!--বিনোদন ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>বিনোদন
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="flex flex-col md:flex-row gap-7 mb-7">
                <div class="w-full md:w-2/3 group shadow-lg/5">
                    <div class="w-full overflow-hidden">
                        <img src="../../../public/uploads/post/helen-20171118142634-600x337.jpg"
                            class="w-full transition-transform duration-600 group-hover:scale-120">
                    </div>
                    <div class="p-2">
                        <a href="#"
                            class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">ফেসওয়াশে’র
                            বিজ্ঞাপনে হেলেন</a>
                        <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">মাস তিনেক আগে গ্রামীণফোনের একটি
                            ক্যাম্পেইনের বিজ্ঞাপনচিত্রের মডেল হয়েছিলেন পিজে হেলেন। বিরতি
                            ভেঙে আবারও তিনি কাজে ফিরলেন, নতুন একটি বিজ্ঞাপনচিত্রের মডেল হলেন। এটি কুমারিকা পিম্পেল<a
                                href="#" class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a>
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="group shadow-lg/5">
                        <div class="w-full overflow-hidden">
                            <img src="../../../public/uploads/post/apu-biswas-20171120092445-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="p-2">
                            <a href="#"
                                class="text-md md:text-xl font-medium transition-colors duration-600 hover:text-[#f00] inline">সিনেমা
                                নয় শারীরিক সুস্থতার কথা ভাবছেন অপু</a>
                        </div>
                    </div>

                    <div class="group shadow-lg/5">
                        <div class="w-full overflow-hidden">
                            <img src="../../../public/uploads/post/jahid-hasan-2-20171120103432-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="p-2">
                            <a href="#"
                                class="text-md md:text-xl font-medium transition-colors duration-600 hover:text-[#f00] inline">সিনেমা
                                নয় শারীরিক সুস্থতার কথা ভাবছেন অপু</a>
                        </div>
                    </div>

                </div>
            </div>

            <!--খেলাধুলা এবং ধর্ম-->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                <!--খেলাধুলা ক্যাটাগরি-->
                <div>
                    <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                        <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                            <a>
                                <i class="fa-solid fa-bars pr-2"></i>খেলাধুলা
                            </a>
                        </div>
                        <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                    </div>
                    <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                        <div class="w-full h-full overflow-hidden">
                            <img src="../../../public/uploads/post/brazil-20171119145916-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">বিশ্বকাপে
                                যেমন হতে পারে ব্রাজিল-আর্জেন্টিনার গ্রুপ</a>
                            <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">বাছাই পর্বের লড়াই শেষ।
                                স্বাগতিক রাশিয়াসহ বিশ্বকাপে জায়গা করে নিয়েছে ৩২টি দেশ। আগামী ১ ডিসেম্বর<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex text-lg font-medium border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/ronaldo-1-20171119092537-600x337.jpg"
                                    class="w-[120px] h-auto cursor-pointer flex-shrink-0">

                                <div class="flex-1 overflow-hidden">

                                    <a href="#"
                                        class="display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
                                        রিয়ালের ড্রতে আরও এগিয়ে গেল বার্সা
                                    </a>

                                </div>

                            </div>
                            <div
                                class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                                <span class="text-base cursor-pointer">আরো খবর..</span>
                                <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                            </div>

                        </div>
                    </div>
                </div>


                <!--ধর্ম ক্যাটাগরি-->
                <div>
                    <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                        <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                            <a>
                                <i class="fa-solid fa-bars pr-2"></i>ধর্ম
                            </a>
                        </div>
                        <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                    </div>
                    <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                        <div class="w-full h-full overflow-hidden">
                            <img src="../../../public/uploads/post/Kabar-Top20151007112831-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">কবরের
                                আজাব হতে মুক্তির আমল</a>
                            <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">পৃথিবীতে এমন কোনো মানুষ খুঁজে
                                পাওয়া যাবে না যে, সে কবরে আজাব ভোগ করতে আগ্রহী।<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex text-lg font-medium border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/Amal-Top20151111104347-600x337.jpg"
                                    class="w-[120px] h-auto cursor-pointer flex-shrink-0">

                                <div class="flex-1 overflow-hidden">

                                    <a href="#"
                                        class="display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
                                        শয়তানের আক্রমণ থেকে রক্ষার আমল
                                    </a>

                                </div>

                            </div>
                            <div
                                class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                                <span class="text-base cursor-pointer">আরো খবর..</span>
                                <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--ভ্রমণ ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>ভ্রমণ
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="flex flex-col md:flex-row gap-7 mb-7">
                <div class="w-full md:w-2/3 group shadow-lg/5">
                    <div class="w-full overflow-hidden">
                        <img src="../../../public/uploads/post/snowdonia-cover-20171102184434-600x337.jpg"
                            class="w-full transition-transform duration-600 group-hover:scale-120">
                    </div>
                    <div class="p-2">
                        <a href="#"
                            class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">একশ’র
                            বেশি হ্রদ যে উদ্যানে</a>
                        <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">লেক বা হ্রদ প্রায় সব উদ্যানেই
                            রয়েছে। কম আর বেশি। তবে ওয়েলসের স্নোডোনিয়া জাতীয় উদ্যানে হ্রদ রয়েছে একশ’র বেশি। দেশের বাইরে
                            গেলে এখান থেকে ঘুরে<a href="#"
                                class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a>
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="group shadow-lg/5">
                        <div class="w-full overflow-hidden">
                            <img src="../../../public/uploads/post/foys-lake-cover-20171021195737-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="p-2">
                            <a href="#"
                                class="text-base md:text-lg lg:text-xl font-medium transition-colors duration-600 hover:text-[#f00] inline">ঘুরে
                                আসুন ফয়’স লেক</a>
                        </div>
                    </div>

                    <div class="group shadow-lg/5">
                        <div class="w-full overflow-hidden">
                            <img src="../../../public/uploads/post/canada-20171016191621-600x337.png"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="p-2">
                            <a href="#"
                                class="text-base md:text-lg lg:text-xl font-medium transition-colors duration-600 hover:text-[#f00] inline">কানাডার
                                ব্যানফ জাতীয় উদ্যান</a>
                        </div>
                    </div>

                </div>
            </div>

            <!--ফটো গ্যালারি-->
            <div class="mb-7">
                <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                    <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                        <a>
                            <i class="fa-solid fa-bars pr-2"></i>ফটো গ্যালারি
                        </a>
                    </div>
                    <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                </div>
                <swiper :modules="modules" :slides-per-view="1" :loop="true" :speed="800"
                    :autoplay="{ delay: 3000, disableOnInteraction: false }" :navigation="{
                        nextEl: '.custom-next',
                        prevEl: '.custom-prev'
                    }">
                    <swiper-slide v-for="i in 3" :key="i">
                        <div class="relative w-full h-full">
                            <img src="../../../public/uploads/photo_gallery/u2019u2019u2019u2019u2019u2019u2019-84-600x337.jpg"
                                class="w-full">
                            <div class="absolute bottom-0 left-0 w-full bg-black/40 text-white py-3">
                                <h1 class="text-lg md:text-xl lg:text-2xl px-6">সবুজের মাঝে হাস্যোজ্জ্বল মেহজাবিন।</h1>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>

            <!--ভিডিও গ্যালারি-->
            <div class="mb-7">
                <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                    <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                        <a>
                            <i class="fa-solid fa-bars pr-2"></i>ভিডিও গ্যালারি
                        </a>
                    </div>
                    <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-2">
                    <div v-for="i in 6" :key="i" class="bg-white shadow-md overflow-hidden group">
                        <div class="aspect-video w-full bg-black">
                            <iframe class="w-full h-full"
                                src="https://www.youtube.com/embed/AwNPc9JZ1Ng?si=HlerwlzZlGzyl23H"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- সাইডবার -->
        <div class="hidden md:block flex-1">
            <div class="mb-7">
                <div class="flex items-center bg-[#f7f7f7] text-[#333] text-lg border-l-5 border-[#f00f00] p-2 mb-2">
                    <h4>ফেসবুকে আমরা...</h4>
                </div>
                <div class="flex items-center bg-[#f7f7f7] text-[#333] text-lg border-l-5 border-[#f00f00] p-2 mb-2">
                    <h4>পুরাতন খবর</h4>
                </div>
                <div class="flex text-lg">
                    <input type="date" placeholder="এখানে লিখুন.."
                        class="flex-1 border border-[#bec9d2] focus:outline-none focus:ring-1 focus:ring-[#1879d0] py-2 px-2">
                    <button
                        class="bg-[#1879d0] text-white hover:bg-[#0a4466] transition py-2 px-6 cursor-pointer">খুজুন</button>
                </div>
            </div>


            <!--স্বাস্থ্য ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>স্বাস্থ্য
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                <div class="w-full h-full overflow-hidden">
                    <img src="../../../public/uploads/post/dental-college-20171019191958-600x337.jpg"
                        class="transition-transform duration-600 group-hover:scale-120">
                </div>
                <div class="w-full p-2">
                    <a href="#"
                        class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">ডেন্টালে
                        ভর্তি : ৪৮ ঘণ্টায় ১১ সহস্রাধিক আবেদন</a>
                    <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">চলতি বছর সরকারি-বেসরকারি ডেন্টাল কলেজে
                        গত
                        ৪৮ ঘণ্টার কম সময়ে ১১ হাজারেরও বেশি ভর্তিচ্ছুর আবেদন<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i"
                        class="flex text-lg font-medium border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                        <img src="../../../public/uploads/post/medical-20171106113824-600x337.jpg"
                            class="w-[120px] h-auto cursor-pointer flex-shrink-0">

                        <div class="flex-1 overflow-hidden">

                            <a href="#"
                                class="display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
                                সোহরাওয়ার্দীতে দুই সপ্তাহ ঝুঁকিপূর্ণ অস্ত্রোপচার বন্ধ
                            </a>

                        </div>

                    </div>
                    <div class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                        <span class="text-base cursor-pointer">আরো খবর..</span>
                        <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                    </div>

                </div>
            </div>

            <!--সাহিত্য ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>সাহিত্য
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                <div class="w-full h-full overflow-hidden">
                    <img src="../../../public/uploads/post/rudro-20171016120759.jpg"
                        class="transition-transform duration-600 group-hover:scale-120">
                </div>
                <div class="w-full p-2">
                    <a href="#"
                        class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">রুদ্র
                        মুহম্মদ শহিদুল্লাহর জন্মদিন আজ</a>
                    <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">প্রেম ও দ্রোহের কবি রুদ্র মুহম্মদ
                        শহিদুল্লাহর আজ ৬১তম জন্মবার্ষিকী। ১৯৫৬ সালের আজকের এই দিনে<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i"
                        class="flex text-lg font-medium border-b-1 border-[#bec9d2] gap-3 py-2">
                        <img src="../../../public/uploads/post/shamsur-rahman-20171023093303-600x337.jpg"
                            class="w-[120px] h-auto cursor-pointer">
                        <div class="flex-1 overflow-hidden">
                            <a
                                class="display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600">কবি
                                শামসুর রাহমানের
                                ৮৯তম জন্মদিন আজ</a>
                        </div>
                    </div>
                    <div class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                        <span class="text-base cursor-pointer">আরো খবর..</span>
                        <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                    </div>

                </div>
            </div>

            <!--সম্পাদকীয় ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>সম্পাদকীয়
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                <div class="w-full h-full overflow-hidden">
                    <img src="../../../public/uploads/post/896740999a7a5b025335cd96bbcd976c-5a07aa81cdbf1-600x337.jpg"
                        class="transition-transform duration-600 group-hover:scale-120">
                </div>
                <div class="w-full p-2">
                    <a href="#"
                        class="text-xl md:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">বাল্যবিবাহ
                        রোধ করতে হবে সম্মিলিতভাবে</a>
                    <p class="text-sm md:text-base text-[#333] pt-2 line-clamp-3">বরগুনার পাথরঘাটা উপজেলায় বাল্যবিবাহের
                        কারণে
                        ৪৫ জন ছাত্রীর চলমান জুনিয়র স্কুল সার্টিফিকেট (জেএসসি) ও জুনিয়র<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i"
                        class="flex text-lg font-medium border-b-1 border-[#bec9d2] gap-3 py-2">
                        <img src="../../../public/uploads/post/932961cdc0156bbdbc087c6c007db9ab-5a06f4e477b0f-600x337.jpg"
                            class="w-[120px] h-auto cursor-pointer">
                        <div class="flex-1 overflow-hidden">
                            <a
                                class="display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600">দুর্বৃত্তদের
                                ধরুন,
                                ক্ষতিগ্রস্তদের পাশে দাঁড়ান</a>
                        </div>

                    </div>
                    <div class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                        <span class="text-base cursor-pointer">আরো খবর..</span>
                        <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                    </div>

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