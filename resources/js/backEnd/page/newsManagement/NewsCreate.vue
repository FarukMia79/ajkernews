<template>
    <div class="p-2 md:p-6 max-w-[1600px] mx-auto">
        <form @submit.prevent="submitForm" enctype="multipart/form-data">
            <!-- title and breadcrumb -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                <div>
                    <h1 class="text-2xl font-black text-gray-800 tracking-tight">নতুন খবর প্রকাশ করুন</h1>
                    <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                        <span>অ্যাডমিন</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        <span>নিউজ</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        <span class="text-blue-600 font-medium">নতুন খবর</span>
                    </nav>
                </div>
                <div class="flex gap-3 w-full md:w-auto">
                    <button
                        class="flex-1 md:flex-none px-6 py-2.5 bg-white border border-gray-200 rounded-xl font-bold text-gray-600 hover:bg-gray-50 transition">ড্রাফট
                        রাখুন</button>
                    <button type="submit"
                        class="flex-1 md:flex-none px-8 py-2.5 bg-[#003557] hover:bg-[#004a7c] text-white rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i> পাবলিশ করুন
                    </button>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <div class="w-full lg:w-2/3 space-y-6">
                    <!-- title card -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 space-y-4">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700">খবরের শিরোনাম <span
                                    class="text-red-500">*</span></label>
                            <input v-model="form.title" type="text" placeholder="আকর্ষণীয় শিরোনাম লিখুন..."
                                class="w-full text-xl font-bold p-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                            <small v-if="errors.title" class="text-red-500">{{ errors.title[0] }}</small>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-bold text-gray-400 uppercase tracking-widest">স্লাগ / URL
                                Slug</label>
                            <div
                                class="flex items-center bg-gray-100 px-4 py-2 rounded-lg text-sm text-gray-500 border border-dashed border-gray-300">
                                <span>ajkernews.com/news/</span>
                                <span class="font-medium text-blue-600 ml-1 italic">{{ form.slug }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- main news -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <label class="text-sm font-bold text-gray-700 mb-4 block">বিস্তারিত সংবাদ <span
                                class="text-red-500">*</span></label>
                        <!-- mock text editor toolbar -->
                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <div class="bg-gray-50 border-b border-gray-200 p-2 flex flex-wrap gap-2">
                                <button
                                    v-for="icon in ['bold', 'italic', 'underline', 'link', 'image', 'list-ul', 'list-ol']"
                                    :key="icon"
                                    class="w-8 h-8 flex items-center justify-center hover:bg-white hover:shadow-sm rounded border border-transparent hover:border-gray-200 text-gray-600 transition">
                                    <i :class="`fa-solid fa-${icon}`"></i>
                                </button>
                            </div>
                            <textarea v-model="form.content" rows="15" placeholder="এখান থেকে খবর লেখা শুরু করুন..."
                                class="w-full p-4 outline-none resize-none text-lg leading-relaxed"></textarea>
                            <small v-if="errors.content" class="text-red-500">{{ errors.content[0] }}</small>
                        </div>
                    </div>

                    <!-- seo section -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">এসইও কনফিগারেশন (SEO)</h3>
                        <div class="space-y-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-gray-700">মেটা ডেসক্রিপশন</label>
                                <textarea v-model="form.meta_description" rows="3"
                                    class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none"
                                    placeholder="সার্চ ইঞ্জিনের জন্য ছোট বর্ণনা..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/3 space-y-6">
                    <!-- category card -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-list-check text-blue-500"></i> ক্যাটাগরি ও ট্যাগ
                        </h3>
                        <div class="space-y-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold text-gray-500">প্রধান ক্যাটাগরি</label>
                                <select v-model="form.category_id" @change="fetchSubCategories"
                                    class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                    <option value="">ক্যাটাগরি নির্বাচন করুন</option>
                                    <option v-for="category in categories" :key="category.id" :value="category.id">
                                        {{ category.name }}
                                    </option>
                                </select>
                            </div>

                            <!-- sub category -->
                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold text-gray-500">সাব-ক্যাটাগরি</label>
                                <select v-model="form.sub_category_id"
                                    class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                    <option value="">সাব-ক্যাটাগরি নির্বাচন করুন</option>
                                    <option v-for="sub in subCategories" :key="sub.id" :value="sub.id">{{ sub.name }}
                                    </option>
                                </select>
                            </div>

                            <!-- division -->
                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold text-gray-500">বিভাগ</label>
                                <select v-model="form.division_id"
                                    class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                    <option value="">বিভাগ নির্বাচন করুন</option>
                                    <option v-for="division in divisions" :key="division.id" :value="division.id">
                                        {{ division.name }}
                                    </option>
                                </select>
                            </div>

                            <!-- tags -->
                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold text-gray-500">ট্যাগ (কমা দিয়ে লিখুন)</label>
                                <input v-model="form.tags" type="text" placeholder="উদা: ক্রিকেট, বিসিবি"
                                    class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none">
                            </div>
                        </div>
                    </div>

                    <!-- thumbnail image card -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-image text-green-500"></i> থাম্বনেইল ছবি
                        </h3>

                        <!-- image upload area -->
                        <div
                            class="relative border-2 border-dashed border-gray-200 rounded-2xl p-4 text-center hover:border-blue-400 transition cursor-pointer">
                            <input type="file" @change="handleImage" class="absolute inset-0 opacity-0 cursor-pointer">

                            <!-- if image exists show preview, otherwise show icon -->
                            <div v-if="imagePreview" class="w-full h-40 overflow-hidden rounded-lg">
                                <img :src="imagePreview" class="w-full h-full object-cover">
                            </div>
                            <div v-else class="py-4">
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-gray-300"></i>
                                <p class="text-sm text-gray-500 mt-2">ছবি আপলোড করতে ক্লিক করুন</p>
                            </div>
                        </div>
                    </div>

                    <!-- settings and options card -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h3 class="text-base font-bold text-gray-800 mb-4">নিউজ অপশনস</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input v-model="form.is_breaking" type="checkbox"
                                    class="w-4 h-4 rounded accent-blue-600">
                                <span class="text-sm text-gray-600 group-hover:text-black transition">ব্রেকিং নিউজ
                                    হিসেবে
                                    দেখান</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input v-model="form.is_slider" type="checkbox" class="w-4 h-4 rounded accent-blue-600">
                                <span class="text-sm text-gray-600 group-hover:text-black transition">স্লাইডারে যুক্ত
                                    করুন</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input v-model="form.allow_comment" type="checkbox"
                                    class="w-4 h-4 rounded accent-blue-600" checked>
                                <span class="text-sm text-gray-600 group-hover:text-black transition">কমেন্ট করার সুবিধা
                                    রাখুন</span>
                            </label>

                            <label class="text-xs font-bold text-gray-500">স্ট্যাটাস</label>
                            <select v-model="form.status"
                                class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                <option value="published">পাবলিশড</option>
                                <option value="draft">ড্রাফট</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import Notification from '../../../helpers/Notification';
export default {
    data() {
        return {
            form: {
                user_id: '',
                category_id: '',
                sub_category_id: '',
                division_id: '',
                title: '',
                slug: '',
                content: '',
                meta_description: '',
                tags: [],
                image: null,
                status: 'draft',
                is_breaking: false,
                is_slider: false,
                allow_comment: true
            },
            categories: [],
            subCategories: [],
            divisions: [],
            imagePreview: null,
            errors: {}
        }
    },
    watch: {
        'form.title'(newVal) {
            this.generateSlug();
        }
    },
    mounted() {
        this.fetchCategories();
        this.fetchDivisions();
        this.fetchDivisions();
    },
    methods: {
        handleImage(e) {
            const file = e.target.files[0];
            if (file) {
                this.form.image = file;
                this.imagePreview = URL.createObjectURL(file);
            }
        },
        generateSlug() {
            this.form.slug = this.form.title.toLowerCase().replace(/ /g, '-');
        },
        fetchCategories() {
            axios.get('/api/category')
                .then(response => {
                    this.categories = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        fetchSubCategories() {
            if (this.form.category_id) {
                axios.get(`/api/sub-categories/by-category/${this.form.category_id}`)
                    .then(response => {
                        this.subCategories = response.data;
                    });
            } else {
                this.subCategories = [];
            }
        },
        fetchDivisions() {
            axios.get('/api/division')
                .then(response => {
                    this.divisions = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        submitForm() {
            let formData = new FormData()

            formData.append('title', this.form.title);
            formData.append('slug', this.form.slug);
            formData.append('content', this.form.content);
            formData.append('category_id', this.form.category_id);
            formData.append('sub_category_id', this.form.sub_category_id);
            formData.append('division_id', this.form.division_id);
            formData.append('meta_description', this.form.meta_description);
            formData.append('image', this.form.image);
            formData.append('status', this.form.status);
            formData.append('is_breaking', this.form.is_breaking ? 1 : 0);
            formData.append('is_slider', this.form.is_slider ? 1 : 0);
            formData.append('allow_comment', this.form.allow_comment ? 1 : 0);


            if (this.form.tags) {
                let tagsArray = typeof this.form.tags === 'string'
                    ? this.form.tags.split(',')
                    : this.form.tags;

                tagsArray.forEach((tag, index) => {
                    let cleanTag = tag.trim();
                    if (cleanTag) { // Append only if not empty
                        formData.append(`tags[${index}]`, cleanTag);
                    }
                });
            }

            axios.post('/api/news', formData)
                .then(response => {
                    Notification.success('News created successfully');
                    this.$router.push({ name: 'adminNews' });
                })
                .catch(error => {
                    if (error.response && error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                    Notification.error('Somthing went wrong');
                });
        }
    }
}
</script>

<style scoped></style>