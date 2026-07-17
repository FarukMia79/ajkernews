<template>
    <div class="max-w-5xl mx-auto p-2 md:p-6 font-sans">
        <div
            class="flex justify-between items-center mb-8 bg-white p-5 rounded-2xl shadow-sm border border-gray-100"
        >
            <div>
                <h2 class="text-2xl font-black text-gray-800 tracking-tight">
                    নতুন বিজ্ঞাপন যোগ করুন
                </h2>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link
                        to="/admin/advertisements"
                        class="hover:text-blue-600 font-medium"
                        >বিজ্ঞাপন</router-link
                    >
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-bold">তৈরি করুন</span>
                </nav>
            </div>
            <router-link
                to="/admin/advertisements"
                class="p-2.5 bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition"
            >
                <i class="fa-solid fa-arrow-left"></i>
            </router-link>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div
                    class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden"
                >
                    <form
                        @submit.prevent="submitForm"
                        class="p-6 md:p-10 space-y-6"
                    >
                        <div class="grid gap-6">
                            <div class="flex flex-col gap-2">
                                <label
                                    class="text-sm font-bold text-gray-700 ml-1"
                                    >বিজ্ঞাপন দাতা / ক্লায়েন্টের নাম
                                    <span class="text-red-500">*</span></label
                                >
                                <input
                                    v-model="form.client_name"
                                    type="text"
                                    placeholder="উদা: গ্রামীণফোন বা নেসলে"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all text-lg"
                                />
                                <p
                                    v-if="errors.client_name"
                                    class="text-red-500 text-sm"
                                >
                                    {{ errors.client_name[0] }}
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label
                                    class="text-sm font-bold text-gray-700 ml-1"
                                    >বিজ্ঞাপনের লিঙ্ক (Target URL)</label
                                >
                                <input
                                    v-model="form.target_url"
                                    type="url"
                                    placeholder="https://example.com"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all font-mono text-sm"
                                />
                                <p
                                    v-if="errors.target_url"
                                    class="text-red-500 text-sm"
                                >
                                    {{ errors.target_url[0] }}
                                </p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="flex flex-col gap-2 text-lg">
                                    <label
                                        class="text-sm font-bold text-gray-700 ml-1"
                                        >শুরুর তারিখ</label
                                    >
                                    <input
                                        v-model="form.start_date"
                                        type="date"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500"
                                    />
                                    <p
                                        v-if="errors.start_date"
                                        class="text-red-500 text-sm"
                                    >
                                        {{ errors.start_date[0] }}
                                    </p>
                                </div>
                                <div class="flex flex-col gap-2 text-lg">
                                    <label
                                        class="text-sm font-bold text-gray-700 ml-1"
                                        >শেষের তারিখ</label
                                    >
                                    <input
                                        v-model="form.end_date"
                                        type="date"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500"
                                    />
                                    <p
                                        v-if="errors.end_date"
                                        class="text-red-500 text-sm"
                                    >
                                        {{ errors.end_date[0] }}
                                    </p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="flex flex-col gap-2 text-lg">
                                    <label
                                        class="text-sm font-bold text-gray-700 ml-1"
                                        >বিজ্ঞাপনের পজিশন নির্বাচন করুন</label
                                    >
                                    <select
                                        v-model="form.placement"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer"
                                    >
                                        <option value="">
                                            Select placement
                                        </option>
                                        <option value="header">
                                            হেডার ব্যানার (৯৭০ x ৯০)
                                        </option>
                                        <option value="sidebar">
                                            সাইডবার (৩০০ x ২৫০)
                                        </option>
                                        <option value="content_top">
                                            নিউজের ওপরে (৭২৮ x ৯০)
                                        </option>
                                        <option value="content_bottom">
                                            নিউজের নিচে (৭২৮ x ৯০)
                                        </option>
                                        <option value="popup">
                                            পপ-আপ বিজ্ঞাপন
                                        </option>
                                    </select>
                                    <p
                                        v-if="errors.placement"
                                        class="text-red-500 text-sm"
                                    >
                                        {{ errors.placement[0] }}
                                    </p>
                                </div>

                                <div class="flex flex-col gap-2 text-lg">
                                    <label
                                        class="text-sm font-bold text-gray-700 ml-1"
                                        >অবস্থা</label
                                    >
                                    <select
                                        v-model="form.status"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer"
                                    >
                                        <option value="">Select status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">
                                            Inactive
                                        </option>
                                    </select>
                                    <p
                                        v-if="errors.status"
                                        class="text-red-500 text-sm"
                                    >
                                        {{ errors.status[0] }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="pt-6 border-t border-gray-100 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-end"
                        >
                            <button
                                type="button"
                                @click="resetForm"
                                class="w-full lg:w-auto px-8 py-3 text-gray-500 hover:text-gray-800 font-bold transition rounded-2xl border border-gray-200 bg-white"
                            >
                                রিসেট করুন
                            </button>
                            <button
                                type="submit"
                                class="w-full lg:w-auto bg-[#003557] hover:bg-[#004a7c] text-white px-8 py-3 rounded-2xl font-bold shadow-lg shadow-blue-900/20 transition-all transform active:scale-95 flex items-center justify-center gap-2"
                            >
                                <i class="fa-solid fa-check-circle"></i>
                                বিজ্ঞাপন সেভ করুন
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="space-y-6">
                <div
                    class="bg-white p-6 rounded-3xl shadow-md border border-gray-100"
                >
                    <h3
                        class="text-base font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-3"
                    >
                        <i class="fa-solid fa-image text-green-500"></i> ব্যানার
                        ইমেজ
                    </h3>

                    <div
                        class="relative group border-2 border-dashed border-gray-200 rounded-2xl p-6 text-center hover:border-blue-400 hover:bg-blue-50 transition-all cursor-pointer"
                    >
                        <input
                            @change="handleImageUpload"
                            type="file"
                            accept="image/*"
                            class="absolute inset-0 opacity-0 cursor-pointer w-full h-full"
                        />
                        <div class="space-y-2">
                            <i
                                class="fa-solid fa-cloud-arrow-up text-3xl text-gray-300 group-hover:text-blue-500 transition-all"
                            ></i>
                            <p class="text-xs font-bold text-gray-500">
                                ছবি আপলোড করুন
                            </p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <p
                            class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-3"
                        >
                            লাইভ প্রিভিউ:
                        </p>
                        <div
                            class="w-full h-40 bg-gray-50 rounded-xl border border-gray-100 flex items-center justify-center overflow-hidden"
                        >
                            <img
                                v-if="imagePreview"
                                :src="imagePreview"
                                class="w-full h-full object-contain"
                            />
                            <span v-else class="text-gray-300 text-xs italic"
                                >কোনো ছবি নেই</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Notification from "../../../helpers/Notification";
export default {
    data() {
        return {
            form: {
                client_name: "",
                target_url: "",
                start_date: "",
                end_date: "",
                placement: "",
                status: "",
                image: null,
            },
            errors: {},
            imagePreview: null,
        };
    },
    methods: {
        handleImageUpload(event) {
            const file = event.target.files[0];
            if (!file) {
                return;
            }
            if (file.size > 2 * 1024 * 1024) {
                Notification.error("File size must be less than 2MB");
                return;
            }
            this.form.image = file;
            this.imagePreview = URL.createObjectURL(file);
        },
        resetForm() {
            this.form = {
                client_name: "",
                target_url: "",
                start_date: "",
                end_date: "",
                placement: "",
                status: "",
                image: null,
            };
            this.errors = {};
            this.imagePreview = null;
        },
        submitForm() {
            this.errors = {};
            const formData = new FormData();
            formData.append("client_name", this.form.client_name);
            formData.append("target_url", this.form.target_url);
            formData.append("start_date", this.form.start_date);
            formData.append("end_date", this.form.end_date);
            formData.append("placement", this.form.placement);
            formData.append("status", this.form.status);
            if (this.form.image) {
                formData.append("image", this.form.image);
            }

            axios
                .post("/api/advertisements", formData)
                .then(() => {
                    Notification.success("Advertisement created successfully");
                    this.$router.push("/admin/advertisements");
                })
                .catch((error) => {
                    if (error.response && error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                    Notification.error("Failed to create advertisement");
                    console.log(error);
                });
        },
    },
};
</script>

<style scoped></style>
