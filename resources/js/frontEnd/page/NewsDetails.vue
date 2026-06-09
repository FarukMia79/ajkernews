<template>
    <div class="flex flex-col md:flex-row w-full gap-7">
        <div class="w-full md:w-2/3">
            <!-- রাজনীতি -->
            <div class="flex w-full justify-center items-center border-b-2 border-[#f00f00] text-lg">
                <div
                    class="flex justify-center items-center whitespace-nowrap cursor-pointer bg-[#f00f00] text-white py-1 px-2">
                    <a>
                        <i class="fa-solid fa-house"></i>প্রচ্ছদ
                    </a>
                </div>
                <div
                    class="flex justify-center items-center whitespace-nowrap cursor-pointer bg-[#666666] text-white py-1 px-2">
                    <a>
                        <i class="fa-solid fa-bars"></i>রাজনীতি
                    </a>
                </div>
                <div class="flex-1 bg-[#d6effe] text-[#d6effe] py-1">
                    .
                </div>
            </div>

            <div>
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold mt-5 mb-3">
                    প্রধানমন্ত্রী পদত্যাগ করলে জনগণও তাকে ক্ষমা করে দেবে
                </h1>
                <div class="flex">
                    <div>
                        <img class="w-15.5 h-auto cursor-pointer" src="../../../../public/uploads/reporter/noimagee.gif"
                            alt="reporter">
                    </div>
                    <div class="ml-5 flex-1 w-full">
                        <span class="text-sm md:text-base lg:text-lg text-gray-600">রিপোর্টার: জন ডো</span>
                        <div
                            class="flex items-center gap-3 border-t border-[#bec9d2] text-sm md:text-base lg:text-lg text-gray-600 mb-5">
                            <span>প্রকাশিত: ০১ জুন ২০২৪, ১০:০০ পূর্বাহ্ন</span>
                            <span>আপডেট: ০১ জুন ২০২৪, ১১:৩০ পূর্বাহ্ন</span>
                        </div>
                    </div>
                </div>
                <div class="w-full h-auto mb-5">
                    <img class="w-full h-auto" src="../../../../public/uploads/post/bnp-20171120133207.jpg" alt="news">
                </div>
                <div class="text-base md:text-lg text-gray-800 leading-relaxed">
                    <p class="mb-4">
                        প্রধানমন্ত্রী শেখ হাসিনাকে বিএনপি চেয়ারপারসন বেগম খালেদা জিয়া ক্ষমা করেছেন, আমরাও ক্ষমা করে দেব।
                        কিন্তু জনগণ কি ক্ষমা করবে? জনগণের দাবি এক, শেখ হাসিনার পদত্যাগ। জনগণ এও বিশ্বাস করে অবাধ
                        নিরপেক্ষ নির্বাচন হলে আওয়ামী লীগ সে নির্বাচনে অংশ নেবে না। যারা এখন ক্ষমতায় আছেন গণতন্ত্রের পথে
                        ফিরে আসুন। একটু ক্ষমা চান। এইদেশ সেইদেশ ঘুরতে হবে না। বাংলাদেশেই থাকতে পারবেন।
                    </p>
                    <p class="mb-4">
                        সোমবার দুপুরে নয়াপল্টনে ভাসানী ভবনে এক অনুষ্ঠানে বিএনপির স্থায়ী কমিটির সদস্য গয়েশ্বর চন্দ্র রায়
                        এসব কথা বলেন।
                    </p>
                    <p class="mb-4">
                        বিএনপির সিনিয়র ভাইস চেয়ারম্যান তারেক রহমানের ৫৩তম জন্মদিন উপলক্ষে এই অনুষ্ঠানের আয়োজন করে ঢাকা
                        মহানগর দক্ষিণ বিএনপি। অনুষ্ঠানে কেক কেটে তারেক রহমানের জন্মদিন উদযাপন করা হয়।
                    </p>
                </div>
            </div>

            <!--বিজ্ঞাপন-->
            <div class="w-full mb-7">
                <img class="w-full h-auto" src="../../../../public/uploads/biggapon/biggapon-1.gif">
            </div>

            <div class="border-b border-[#bec9d2] mb-4">
                <h2 class="text-lg md:text-xl lg:text-2xl font-bold mt-5 mb-2">
                    নিউজটি শেয়ার করুন..
                </h2>
            </div>
            <div class="flex gap-4 mb-7">
                <button
                    class="flex items-center gap-2 bg-[#3b5998] text-white py-2 px-4 rounded hover:bg-white hover:text-[#3b5998] hover:border hover:border-[#3b5998] transition-colors duration-300">
                    <i class="fa-brands fa-facebook-f"></i> Facebook
                </button>
                <button
                    class="flex items-center gap-2 bg-[#1da1f2] text-white py-2 px-4 rounded hover:bg-white hover:text-[#1da1f2] hover:border hover:border-[#1da1f2] transition-colors duration-300">
                    <i class="fa-brands fa-twitter"></i> Twitter
                </button>
                <button
                    class="flex items-center gap-2 bg-[#0077b5] text-white py-2 px-4 rounded hover:bg-white hover:text-[#0077b5] hover:border hover:border-[#0077b5] transition-colors duration-300">
                    <i class="fa-brands fa-linkedin-in"></i> LinkedIn
                </button>
                <button
                    class="flex items-center gap-2 bg-[#e4405f] text-white py-2 px-4 rounded hover:bg-white hover:text-[#e4405f] hover:border hover:border-[#e4405f] transition-colors duration-300">
                    <i class="fa-brands fa-instagram"></i> Instagram
                </button>
            </div>
        </div>
        <div class="flex-1">
            <div
                class="w-full sm:h-77.5 md:h-77.5 lg:h-95 xl:h-96.25 2xl:h-105 mb-4 overflow-hidden flex flex-col bg-white">
                <div class="flex text-sm md:text-base lg:text-lg font-bold">
                    <button class="w-1/2 bg-[#f0f0f0] py-1 border-t-3 border-[#7719aa] cursor-pointer">
                        সর্বশেষ সংবাদ
                    </button>
                    <button class="w-1/2 bg-[#d2d5db] py-1 text-gray-600 cursor-pointer">
                        জনপ্রিয় সংবাদ
                    </button>
                </div>
                <div class=" overflow-y-auto border-x border-b border-[#bec9d2] px-1">
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

}
</script>

<style scoped></style>