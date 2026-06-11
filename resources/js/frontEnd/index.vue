<template>
    <div class="w-full flex flex-col md:flex-row justify-between gap-7 mb-7">
        <div class="w-full md:w-1/2 relative group shadow-md p-1 bg-white h-full">
            <!-- Swiper Component -->
            <swiper :modules="modules" :slides-per-view="1" :loop="true" :speed="800"
                :autoplay="{ delay: 3000, disableOnInteraction: false }" :navigation="{
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                }" class="w-full">
                <swiper-slide v-for="i in 3" :key="i">
                    <div class="relative w-full">
                        <img src="../../../public/uploads/post/0.35246415-600x337.jpg" class="w-full object-cover"
                            alt="News">
                        <div class="absolute bottom-0 left-0 w-full bg-black/40 text-white px-6 py-2">
                            <h2 class="text-lg md:text-xl lg:text-2xl font-medium leading-tight">বিশ্বকাপের ফাইনালে
                                বাংলাদেশ: পুরো
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
        <div class="w-full md:w-1/2 flex flex-col md:flex-row gap-7">
            <div class="w-full md:w-1/2 md:h-77.5 lg:h-95 xl:h-96.25 2xl:h-105 overflow-hidden flex flex-col bg-white">
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
            <div class="group w-full md:w-1/2 h-fit shadow-lg overflow-hidden">
                <div class="overflow-hidden">
                    <img class="w-full h-full transition-transform duration-600 group-hover:scale-120"
                        src="../../../public/uploads/post/b5ad7e74e5c010d7f52850a38f7a3ad3-5a10328b77874.jpg">
                </div>
                <div class="py-4 px-2">
                    <h2
                        class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] pb-2">
                        কর দিয়ে দেশের উন্নয়নের একজন
                        অংশীদার আমি</h2>
                    <p class="text-sm lg:text-base text-[#333] line-clamp-4">সরকার দেশের যে উন্নয়ন করছে, আমি প্রতিবছর
                        আয়কর দিয়ে দেশের সেই উন্নয়নের একজন গর্বিত অংশীদার। এজন্য আমি গর্ববোধ করছি। আমি ২৭ বছর ধরে আয়কর
                        দিচ্ছি। শুধু আমিই না, আমার পরিবারের সদস্যরাও আয়কর দেন। আমার স্ত্রী ৩২ বছর ধরে আয়কর দিচ্ছেন।
                    </p><a href="#" class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a>
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
                    <div v-for="i in 8" :key="i" class="flex border-b border-[#bec9d2] py-2 gap-3">
                        <img class="w-42.5 md:w-32.5 h-auto cursor-pointer"
                            src="../../../public/uploads/post/parlament-sm-20171120165706.jpg">
                        <div class="flex-1 overflow-hidden pr-2">
                            <a href="#"
                                class="text-base md:text-base lg:text-lg font-medium display-table w-fit cursor-pointer hover:text-red-600 transition-colors duration-600">সরকারি
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
                                class="text-base md:text-base lg:text-lg font-medium cursor-pointer hover:text-red-600 transition-colors duration-600">২০২৭
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
                            <router-link :to="{ name: 'newsDetails' }">
                                <img src="../../../public/uploads/post/bnp-20171120133207.jpg"
                                    class="w-full transition-transform duration-600 group-hover:scale-120">
                            </router-link>
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">‘প্রধানমন্ত্রী
                                পদত্যাগ করলে জনগণও তাকে ক্ষমা করে দেবে’</a>
                            <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">প্রধানমন্ত্রী শেখ হাসিনাকে
                                বিএনপি চেয়ারপারসন বেগম খালেদা জিয়া ক্ষমা করেছেন, আমরাও ক্ষমা করে দেব। কিন্তু<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/tarek-20171119104531-600x337.jpg"
                                    class="w-30 h-auto cursor-pointer shrink-0">

                                <div class="flex-1 overflow-hidden pr-2">

                                    <a href="#"
                                        class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
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
                                class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">উত্তরায়
                                ফায়কা বুটিকসের যাত্রা শুরু</a>
                            <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">দেশীয় পোশাকের সমাহারে রাজধানী
                                উত্তরার ৪ নম্বর সেক্টরে যাত্রা শুরু করলো ফায়কা ওম্যানস ক্লথিং বুটিকস।<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/hsbc-20171118034650.jpg"
                                    class="w-30 h-auto cursor-pointer shrink-0">

                                <div class="flex-1 overflow-hidden pr-2">

                                    <a href="#"
                                        class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
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
                                class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">সোনালী
                                ব্যাংকের তিন পদের নিয়োগ আপাতত স্থগিত</a>
                            <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">সোনালী ব্যাংকের সিনিয়র অফিসার,
                                অফিসার ও অফিসার (ক্যাশ) পদে নিয়োগ আপাতত স্থগিত থাকবে বলে আদেশ<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/nurse-20171117193636.jpg"
                                    class="w-30 h-auto cursor-pointer shrink-0">

                                <div class="flex-1 overflow-hidden pr-2">

                                    <a href="#"
                                        class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
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
                                class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">দেশে
                                মোবাইল ফোন গ্রাহক ১৪ কোটি ছাড়িয়েছে
                            </a>
                            <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">প্রায় ১৭ কোটি জনসংখ্যার
                                বাংলাদেশের মানুষের হাতে ১৪ কোটি ৭ লাখ ১৩ হাজার মোবাইল সিম রয়েছে। যাদের মধ্যে<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/robot-1-20171115175624-600x337.jpg"
                                    class="w-30 h-auto cursor-pointer shrink-0">

                                <div class="flex-1 overflow-hidden pr-2">

                                    <a href="#"
                                        class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
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
                            class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">ফেসওয়াশে’র
                            বিজ্ঞাপনে হেলেন</a>
                        <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">মাস তিনেক আগে গ্রামীণফোনের একটি
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
                                class="text-base md:text-lg lg:text-xl font-medium transition-colors duration-600 hover:text-[#f00] inline">সিনেমা
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
                                class="text-base md:text-lg lg:text-xl font-medium transition-colors duration-600 hover:text-[#f00] inline">কলকাতার
                                ছবিতে জাহিদ হাসান</a>
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
                                class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">বিশ্বকাপে
                                যেমন হতে পারে ব্রাজিল-আর্জেন্টিনার গ্রুপ</a>
                            <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">বাছাই পর্বের লড়াই শেষ।
                                স্বাগতিক রাশিয়াসহ বিশ্বকাপে জায়গা করে নিয়েছে ৩২টি দেশ। আগামী ১ ডিসেম্বর<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/ronaldo-1-20171119092537-600x337.jpg"
                                    class="w-30 h-auto cursor-pointer shrink-0">

                                <div class="flex-1 overflow-hidden pr-2">

                                    <a href="#"
                                        class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
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
                                class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">কবরের
                                আজাব হতে মুক্তির আমল</a>
                            <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">পৃথিবীতে এমন কোনো মানুষ খুঁজে
                                পাওয়া যাবে না যে, সে কবরে আজাব ভোগ করতে আগ্রহী।<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/Amal-Top20151111104347-600x337.jpg"
                                    class="w-30 h-auto cursor-pointer shrink-0">

                                <div class="flex-1 overflow-hidden pr-2">

                                    <a href="#"
                                        class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
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
                        <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">লেক বা হ্রদ প্রায় সব উদ্যানেই
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

            <!--বিজ্ঞাপন-->
            <div class="w-full mb-7">
                <img class="w-full h-auto" src="../../../public/uploads/biggapon/biggapon-1.gif">
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


            <!--প্রবাস এবং ফিচার-->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                <!--প্রবাস ক্যাটাগরি-->
                <div>
                    <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                        <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                            <a>
                                <i class="fa-solid fa-bars pr-2"></i>প্রবাস
                            </a>
                        </div>
                        <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                    </div>
                    <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                        <div class="w-full h-full overflow-hidden">
                            <img src="../../../public/uploads/post/saudi2-20171119163613-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">সৌদিতে
                                ২৪ হাজার অভিবাসী গ্রেফতার</a>
                            <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">অভিবাসী ও শ্রমিক আইন লঙ্ঘনের
                                অভিযোগে সৌদি আরবে ৩ দিনে প্রায় ২৪ হাজার প্রবাসীকে গ্রেফতার করা হয়েছে।<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/kuwait-e-psc-exam-hall-phot-20171120082347-600x337.jpg"
                                    class="w-30 h-auto cursor-pointer shrink-0">

                                <div class="flex-1 overflow-hidden pr-2">

                                    <a href="#"
                                        class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
                                        কুয়েতেও অনুষ্ঠিত হচ্ছে প্রাথমিক সমাপনী পরীক্ষা
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


                <!--ফিচার ক্যাটাগরি-->
                <div>
                    <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                        <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                            <a>
                                <i class="fa-solid fa-bars pr-2"></i>ফিচার
                            </a>
                        </div>
                        <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
                    </div>
                    <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                        <div class="w-full h-full overflow-hidden">
                            <img src="../../../public/uploads/post/adibasi-cover-20170809131029-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="w-full p-2">
                            <a href="#"
                                class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">বাংলাদেশের
                                আদিবাসী সম্প্রদায়</a>
                            <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">বাংলাদেশের আদিবাসী জনগোষ্ঠীর
                                পরতে পরতে লুকিয়ে আছে নতুন রঙের ছটা। একটি স্বতন্ত্র জাতিসত্ত্বার যে সব<a href="#"
                                    class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                        </div>

                        <div>
                            <div v-for="i in 4" :key="i"
                                class="flex border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                                <img src="../../../public/uploads/post/colour-cover-20170917124421-600x337.jpg"
                                    class="w-30 h-auto cursor-pointer shrink-0">

                                <div class="flex-1 overflow-hidden pr-2">

                                    <a href="#"
                                        class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
                                        পছন্দের রং বলে দেবে আপনার বৈশিষ্ট্য
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

            <!--গণমাধ্যম ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>গণমাধ্যম
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="flex flex-col md:flex-row gap-7 mb-7">
                <div class="w-full md:w-2/3 group shadow-lg/5">
                    <div class="w-full overflow-hidden">
                        <img src="../../../public/uploads/post/ASikjpg20170708150339.jpg"
                            class="w-full transition-transform duration-600 group-hover:scale-120">
                    </div>
                    <div class="p-2">
                        <a href="#"
                            class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">আসিকের
                            মুক্তি দাবিতে ২৪ ঘণ্টার আল্টিমেটাম সাংবাদিকদের</a>
                        <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">ডেইলি অবজারভারের ফটোসাংবাদিক আসিক
                            মোহাম্মদের বিরুদ্ধে মিথ্যা মামলা প্রত্যাহারের দাবিতে জাতীয় প্রেসক্লাবের সামনে দুই ঘণ্টা সড়ক
                            অবরোধ করে মানববন্ধন<a href="#"
                                class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a>
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="group shadow-lg/5">
                        <div class="w-full overflow-hidden">
                            <img src="../../../public/uploads/post/jago-fm-20171028211942-600x337.jpg"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="p-2">
                            <a href="#"
                                class="text-base md:text-lg lg:text-xl font-medium transition-colors duration-600 hover:text-[#f00] inline">তারুণ্যকে
                                জাগিয়ে জাগো এফএম তৃতীয় বছরে</a>
                        </div>
                    </div>

                    <div class="group shadow-lg/5">
                        <div class="w-full overflow-hidden">
                            <img src="../../../public/uploads/post/utpol-bg-20171023005708-600x337.gif"
                                class="w-full transition-transform duration-600 group-hover:scale-120">
                        </div>
                        <div class="p-2">
                            <a href="#"
                                class="text-base md:text-lg lg:text-xl font-medium transition-colors duration-600 hover:text-[#f00] inline">১৩
                                দিন নিখোঁজ সাংবাদিক উৎপল : থানায় জিডি</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- সাইডবার -->
        <div class="overflow-hidden hidden md:block flex-1">
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
                        class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">ডেন্টালে
                        ভর্তি : ৪৮ ঘণ্টায় ১১ সহস্রাধিক আবেদন</a>
                    <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">চলতি বছর সরকারি-বেসরকারি ডেন্টাল কলেজে
                        গত
                        ৪৮ ঘণ্টার কম সময়ে ১১ হাজারেরও বেশি ভর্তিচ্ছুর আবেদন<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i"
                        class="flex border-b border-[#bec9d2] gap-3 py-2 items-start cursor-default">

                        <img src="../../../public/uploads/post/medical-20171106113824-600x337.jpg"
                            class="w-30 h-auto cursor-pointer shrink-0">

                        <div class="flex-1 overflow-hidden">

                            <a href="#"
                                class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600 leading-tight">
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
                        class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">রুদ্র
                        মুহম্মদ শহিদুল্লাহর জন্মদিন আজ</a>
                    <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">প্রেম ও দ্রোহের কবি রুদ্র মুহম্মদ
                        শহিদুল্লাহর আজ ৬১তম জন্মবার্ষিকী। ১৯৫৬ সালের আজকের এই দিনে<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i" class="flex border-b border-[#bec9d2] gap-3 py-2">
                        <img src="../../../public/uploads/post/shamsur-rahman-20171023093303-600x337.jpg"
                            class="w-30 h-auto cursor-pointer">
                        <div class="flex-1 overflow-hidden">
                            <a
                                class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600">কবি
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
                        class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">বাল্যবিবাহ
                        রোধ করতে হবে সম্মিলিতভাবে</a>
                    <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">বরগুনার পাথরঘাটা উপজেলায় বাল্যবিবাহের
                        কারণে
                        ৪৫ জন ছাত্রীর চলমান জুনিয়র স্কুল সার্টিফিকেট (জেএসসি) ও জুনিয়র<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i" class="flex border-b border-[#bec9d2] gap-3 py-2">
                        <img src="../../../public/uploads/post/932961cdc0156bbdbc087c6c007db9ab-5a06f4e477b0f-600x337.jpg"
                            class="w-30 h-auto cursor-pointer">
                        <div class="flex-1 overflow-hidden">
                            <a
                                class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600">দুর্বৃত্তদের
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

            <!-- শিক্ষা ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>শিক্ষা
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                <div class="w-full h-full overflow-hidden">
                    <img src="../../../public/uploads/post/dental-20171111125138.jpg"
                        class="transition-transform duration-600 group-hover:scale-120">
                </div>
                <div class="w-full p-2">
                    <a href="#"
                        class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">শনিবার
                        না হলে রোববার ডেন্টালের ভর্তি পরীক্ষার ফল</a>
                    <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">সরকারি ও বেসরকারি ডেন্টাল কলেজে
                        ব্যাচেলর অব ডেন্টাল সার্জন (বিডিএস) প্রথম বর্ষে ভর্তি পরীক্ষার ফলাফল<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i" class="flex border-b border-[#bec9d2] gap-3 py-2">
                        <img src="../../../public/uploads/post/english-20171114215927.jpg"
                            class="w-30 h-auto cursor-pointer">
                        <div class="flex-1 overflow-hidden">
                            <a
                                class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600">দুর্বৃত্তদের
                                সরকারের নিয়ন্ত্রণে এলো ইংলিশ মিডিয়াম স্কুল</a>
                        </div>

                    </div>
                    <div class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                        <span class="text-base cursor-pointer">আরো খবর..</span>
                        <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                    </div>

                </div>
            </div>


            <!-- লাইফস্টাইল ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>লাইফস্টাইল
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                <div class="w-full h-full overflow-hidden">
                    <img src="../../../public/uploads/post/weight-loss-20171115083550-600x337.jpg"
                        class="transition-transform duration-600 group-hover:scale-120">
                </div>
                <div class="w-full p-2">
                    <a href="#"
                        class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">এই
                        ছয় পানীয় আপনাকে ওজন কমাতে সাহায্য করবে</a>
                    <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">অফিসের ডেস্কে দীর্ঘসময় বসে থেকে কাজ
                        করার জন্য মুটিয়ে গেছেন? বার্গার, পিজার মত ফাস্টফুড প্রিয়<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i" class="flex border-b border-[#bec9d2] gap-3 py-2">
                        <img src="../../../public/uploads/post/lover-large-20171116115210-600x337.jpg"
                            class="w-30 h-auto cursor-pointer">
                        <div class="flex-1 overflow-hidden">
                            <a
                                class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600">স্বামী
                                হিসেবে কেমন হবেন আপনার প্রেমিক?</a>
                        </div>

                    </div>
                    <div class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                        <span class="text-base cursor-pointer">আরো খবর..</span>
                        <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                    </div>
                </div>
            </div>


            <!-- চাকরী ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>চাকরী
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                <div class="w-full h-full overflow-hidden">
                    <img src="../../../public/uploads/post/navy-jobs-20171010150252-600x337.jpg"
                        class="transition-transform duration-600 group-hover:scale-120">
                </div>
                <div class="w-full p-2">
                    <a href="#"
                        class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">নৌবাহিনীতে
                        সাব লেফটেন্যান্ট পদে চাকরি</a>
                    <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">বাংলাদেশ নৌবাহিনীর কমিশন্ড অফিসার ২০১৮
                        এ ডিইও ব্যাচে ইঞ্জিনিয়ার হিসেবে ‘অ্যাক্টিং ইনস্ট্রাক্টর সাব লেফটেন্যান্ট’ পদে<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i" class="flex border-b border-[#bec9d2] gap-3 py-2">
                        <img src="../../../public/uploads/post/rajshahi-railway-20171017152023.jpg"
                            class="w-30 h-auto cursor-pointer">
                        <div class="flex-1 overflow-hidden">
                            <a
                                class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600">রেলওয়ে
                                পশ্চিমাঞ্চলে ১৭৭ জনের চাকরি</a>
                        </div>

                    </div>
                    <div class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                        <span class="text-base cursor-pointer">আরো খবর..</span>
                        <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                    </div>
                </div>
            </div>


            <!-- মতামত ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>মতামত
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                <div class="w-full h-full overflow-hidden">
                    <img src="../../../public/uploads/post/nasa-2-20171117113904-600x337.jpg"
                        class="transition-transform duration-600 group-hover:scale-120">
                </div>
                <div class="w-full p-2">
                    <a href="#"
                        class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">উপগ্রহের
                        স্বপ্ন</a>
                    <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">জেফ আমার অফিসে এলে আমার অফিসের
                        সহকারীরা সজাগ হয়ে যায়। ও একজন নভোবিজ্ঞানী সে কারণে নয়। তাদের সজাগ<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i" class="flex border-b border-[#bec9d2] gap-3 py-2">
                        <img src="../../../public/uploads/post/shanta-20171114100258-600x337.jpg"
                            class="w-30 h-auto cursor-pointer">
                        <div class="flex-1 overflow-hidden">
                            <a
                                class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600">ধানের
                                কাব্যের কবি</a>
                        </div>

                    </div>
                    <div class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                        <span class="text-base cursor-pointer">আরো খবর..</span>
                        <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                    </div>
                </div>
            </div>


            <!-- ক্যাম্পাস ক্যাটাগরি-->
            <div class="flex w-full items-center text-xl border-b-2 border-[#f00f00] mb-2">
                <div class="text-white bg-[#f00f00] whitespace-nowrap p-2">
                    <a>
                        <i class="fa-solid fa-bars pr-2"></i>ক্যাম্পাস
                    </a>
                </div>
                <div class="flex-1 text-[#d6effe] bg-[#d6effe] py-2">.</div>
            </div>
            <div class="w-full group overflow-hidden shadow-lg/5 mb-7">
                <div class="w-full h-full overflow-hidden">
                    <img src="../../../public/uploads/post/rajj-20171108205031.jpg"
                        class="transition-transform duration-600 group-hover:scale-120">
                </div>
                <div class="w-full p-2">
                    <a href="#"
                        class="text-lg md:text-xl lg:text-2xl font-medium transition-colors duration-600 hover:text-[#337ab7] inline">রাবির
                        ‘অপহৃত’ ছাত্রীকে ঢাকায় উদ্ধার</a>
                    <p class="text-sm lg:text-base text-[#333] pt-2 line-clamp-3">রাজশাহী বিশ্ববিদ্যালয়ের আবাসিক হলের
                        সামনে থেকে অপহৃত বাংলা বিভাগের শিক্ষার্থীকে ঢাকায় উদ্ধার করা হয়েছে। শনিবার<a href="#"
                            class="text-[#337ab7] hover:text-[#f00] cursor-pointer pl-1">বিস্তারিত...</a></p>
                </div>

                <div>
                    <div v-for="i in 4" :key="i" class="flex border-b border-[#bec9d2] gap-3 py-2">
                        <img src="../../../public/uploads/post/ssbuilding-20171119174437-600x337.jpg"
                            class="w-30 h-auto cursor-pointer">
                        <div class="flex-1 overflow-hidden">
                            <a
                                class="text-base lg:text-lg font-medium display-table w-fit cursor-pointer transition-colors duration-600 hover:text-red-600">ঢাবি
                                সামাজিক বিজ্ঞান ভবনে ছাত্রীদের কমনরুম উদ্বোধন</a>
                        </div>

                    </div>
                    <div class="flex justify-end items-center transition-colors duration-600 hover:text-red-600 p-3">
                        <span class="text-base cursor-pointer">আরো খবর..</span>
                        <i class="fa fa-angle-double-right text-sm cursor-pointer"></i>
                    </div>
                </div>
            </div>

            <!--বিজ্ঞাপন-->
            <div class="w-full mb-7">
                <img class="w-full h-auto" src="../../../public/uploads/biggapon/ad250-250_ittfw0.gif">
            </div>
            <!--বিজ্ঞাপন-->
            <div class="w-full mb-7">
                <img class="w-full h-auto" src="../../../public/uploads/biggapon/ad250-250_ittfw0.gif">
            </div>

        </div>
    </div>

</template>

<script>
import { Autoplay, Pagination, Navigation } from 'swiper/modules';

export default {
    data() {
        return {
            activeTab: 'latest',
            modules: [Autoplay, Pagination, Navigation],
        }
    },
};
</script>

<style scoped></style>