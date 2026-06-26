<template>
    <div class="p-2 md:p-6 font-sans max-w-6xl mx-auto">
        <!-- ১. হেডার সেকশন -->
        <div class="mb-8">
            <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                <i class="fa-solid fa-gears text-gray-500"></i> জেনারেল সেটিংস
            </h1>
            <p class="text-sm text-gray-500 mt-1">আপনার ওয়েবসাইটের লোগো, কন্টাক্ট ইনফো এবং সোশ্যাল লিঙ্ক এখান থেকে
                ম্যানেজ করুন।</p>
        </div>

        <form @submit.prevent class="space-y-8">

            <!-- ২. সাইট আইডেন্টিটি (লোগো ও নাম) -->
            <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-8 py-4 border-b border-gray-100 flex items-center gap-2 text-lg">
                    <i class="fa-solid fa-id-card text-blue-500"></i>
                    <h3 class="font-bold text-gray-700">সাইটের পরিচয় (Site Identity)</h3>
                </div>
                <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="space-y-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-600 ml-1">ওয়েবসাইটের নাম</label>
                            <input type="text" value="আজকের নিউজ"
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all font-bold">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-600 ml-1 text-lg">ট্যাগলাইন (Slogan)</label>
                            <input type="text" value="সত্যের সন্ধানে অবিচল"
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                        </div>
                    </div>

                    <!-- লোগো আপলোড প্রিভিউ -->
                    <div
                        class="flex flex-col items-center justify-center border-2 border-dashed border-gray-100 rounded-3xl p-6 bg-gray-50/50 group hover:border-blue-300 transition-all">
                        <p class="text-[11px] font-bold text-gray-400 uppercase mb-4 tracking-widest text-lg">বর্তমান
                            লোগো</p>
                        <img src="../../../../../public/uploads/logo/logo.png" class="h-16 mb-4 object-contain">
                        <button type="button"
                            class="text-blue-600 font-bold text-sm hover:underline cursor-pointer">নতুন লোগো আপলোড
                            করুন</button>
                    </div>
                </div>
            </div>

            <!-- ৩. কন্টাক্ট ইনফো ও অ্যাড্রেস -->
            <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-8 py-4 border-b border-gray-100 flex items-center gap-2 text-lg">
                    <i class="fa-solid fa-address-book text-green-500"></i>
                    <h3 class="font-bold text-gray-700">যোগাযোগের তথ্য</h3>
                </div>
                <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8 text-lg">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-600 ml-1">অফিস ইমেইল</label>
                        <input type="email" value="info@ajkernews.com"
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:border-blue-500 transition-all">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-600 ml-1">ফোন নম্বর</label>
                        <input type="text" value="০১৭০০-০০০০০০"
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:border-blue-500 transition-all">
                    </div>
                    <div class="md:col-span-2 flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-600 ml-1">অফিসের ঠিকানা</label>
                        <textarea rows="2"
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-3 outline-none focus:border-blue-500 transition-all">ঢাকা, বাংলাদেশ</textarea>
                    </div>
                </div>
            </div>

            <!-- ৪. সোশ্যাল মিডিয়া লিঙ্কস -->
            <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-8 py-4 border-b border-gray-100 flex items-center gap-2 text-lg">
                    <i class="fa-solid fa-share-nodes text-pink-500"></i>
                    <h3 class="font-bold text-gray-700">সোশ্যাল মিডিয়া প্রোফাইল</h3>
                </div>
                <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6 text-lg">
                    <div class="relative">
                        <i
                            class="fa-brands fa-facebook absolute left-5 top-1/2 -translate-y-1/2 text-blue-600 text-xl"></i>
                        <input type="text" placeholder="Facebook URL"
                            class="w-full pl-12 pr-5 py-3 bg-gray-50 border border-gray-200 rounded-2xl outline-none focus:bg-white focus:border-blue-500 transition-all">
                    </div>
                    <div class="relative">
                        <i
                            class="fa-brands fa-youtube absolute left-5 top-1/2 -translate-y-1/2 text-red-600 text-xl"></i>
                        <input type="text" placeholder="YouTube URL"
                            class="w-full pl-12 pr-5 py-3 bg-gray-50 border border-gray-200 rounded-2xl outline-none focus:bg-white focus:border-blue-500 transition-all">
                    </div>
                    <div class="relative">
                        <i
                            class="fa-brands fa-twitter absolute left-5 top-1/2 -translate-y-1/2 text-sky-400 text-xl"></i>
                        <input type="text" placeholder="Twitter URL"
                            class="w-full pl-12 pr-5 py-3 bg-gray-50 border border-gray-200 rounded-2xl outline-none focus:bg-white focus:border-blue-500 transition-all">
                    </div>
                    <div class="relative">
                        <i
                            class="fa-brands fa-instagram absolute left-5 top-1/2 -translate-y-1/2 text-pink-600 text-xl"></i>
                        <input type="text" placeholder="Instagram URL"
                            class="w-full pl-12 pr-5 py-3 bg-gray-50 border border-gray-200 rounded-2xl outline-none focus:bg-white focus:border-blue-500 transition-all">
                    </div>
                </div>
            </div>

            <!-- ৫. মেইনটেন্যান্স মোড (Pro Feature) -->
            <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-red-50 overflow-hidden">
                <div class="p-8 flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-red-100 p-3 rounded-2xl text-red-600 mt-1"><i
                                class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div>
                            <h4 class="font-bold text-gray-800">মেইনটেন্যান্স মোড (Maintenance Mode)</h4>
                            <p class="text-sm text-gray-400">এটি চালু করলে সাধারণ পাঠকরা সাইট দেখতে পারবে না।</p>
                        </div>
                    </div>
                    <!-- কাস্টম টগল বাটন -->
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div
                            class="w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-red-600">
                        </div>
                    </label>
                </div>
            </div>

            <!-- সেভ বাটন -->
            <div
                class="sticky bottom-6 bg-white/80 backdrop-blur-md p-4 rounded-3xl border border-gray-100 shadow-2xl flex justify-center">
                <button
                    class="bg-[#003557] hover:bg-[#004a7c] text-white px-20 py-4 rounded-2xl font-black shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center gap-3">
                    <i class="fa-solid fa-cloud-arrow-up"></i> সব সেটিংস সেভ করুন
                </button>
            </div>

        </form>
    </div>
</template>

<script>
export default {
    //
}
</script>

<style scoped></style>