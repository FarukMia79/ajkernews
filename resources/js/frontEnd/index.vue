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
        <div class="w-full lg:w-2/3">

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

            <!--বিজ্ঞাপন-->
            <div class="w-full mb-7">
                <img class="w-full h-auto" src="../../../public/uploads/biggapon/biggapon-1.gif">
            </div>
        </div>

        <!-- সাইডবার -->
        <div class="hidden lg:block flex-1">
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