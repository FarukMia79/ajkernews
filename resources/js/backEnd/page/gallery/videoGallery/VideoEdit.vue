<template>
    <div class="p-2 md:p-6 max-w-[1600px] mx-auto font-sans">
        <!-- page header and breadcrumb -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">ভিডিও সংশোধন করুন</h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <router-link to="/admin/video-gallery" class="hover:text-blue-600 font-medium">ভিডিও
                        গ্যালারি</router-link>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-bold">ভিডিও সংশোধন</span>
                </nav>
            </div>
            <router-link to="/admin/video-gallery/index"
                class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 rounded-xl font-bold transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> গ্যালারিতে ফিরে যান
            </router-link>
        </div>

        <form @submit.prevent="updateVideo" enctype="multipart/form-data">
            <div class="flex flex-col lg:flex-row gap-8">
                <div class="w-full lg:w-2/3 space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 space-y-6">
                        <!-- video title -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700">ভিডিওর শিরোনাম <span
                                    class="text-red-500">*</span></label>
                            <input v-model="form.title" type="text" placeholder="আকর্ষণীয় ভিডিওর শিরোনাম দিন..."
                                class="w-full text-lg font-bold p-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                            <small v-if="errors.title" class="text-red-500">{{ errors.title[0] }}</small>
                        </div>

                        <!-- youtube link -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 flex items-center gap-2">
                                <i class="fa-brands fa-youtube text-red-600 text-lg"></i> ইউটিউব ভিডিও লিঙ্ক (YouTube
                                URL)
                                <span class="text-red-500">*</span>
                            </label>
                            <input v-model="form.video_url" type="text"
                                placeholder="উদা: https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                                class="w-full p-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:bg-white focus:ring-4 focus:ring-red-500/10 focus:border-red-500 transition-all font-mono text-sm">
                            <small v-if="errors.video_url" class="text-red-500">{{ errors.video_url[0] }}</small>
                        </div>
                    </div>

                    <!-- live video preview placeholder -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <label class="text-sm font-bold text-gray-700 mb-4 block">লাইভ প্রিভিউ (Video Preview)</label>

                        <div
                            class="aspect-video w-full bg-slate-950 rounded-2xl flex items-center justify-center border-2 border-dashed border-gray-200 text-center overflow-hidden group">

                            <iframe v-if="youtubeId" class="w-full h-full"
                                :src="`https://www.youtube.com/embed/${youtubeId}`" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>

                            <div v-else class="space-y-3 p-6">
                                <div
                                    class="bg-red-500/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition duration-300">
                                    <i class="fa-solid fa-play text-2xl text-red-600"></i>
                                </div>
                                <p class="text-sm text-gray-400 font-medium">ইউটিউব লিঙ্ক দেওয়ার পর এখানে ভিডিওর প্রিভিউ
                                    দেখা যাবে</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/3 space-y-6">
                    <!-- settings section -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h3 class="text-base font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-list-check text-blue-500"></i> ক্যাটাগরি ও অবস্থা
                        </h3>
                        <div class="space-y-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold text-gray-500">ভিডিওর ক্যাটাগরি</label>
                                <select v-model="form.category_id"
                                    class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                    <option value="">ক্যাটাগরি নির্বাচন করুন</option>
                                    <option v-for="category in categories" :key="category.id" :value="category.id">
                                        {{ category.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold text-gray-500">স্ট্যাটাস (Status)</label>
                                <select v-model="form.status"
                                    class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none cursor-pointer">
                                    <option value="">স্ট্যাটাস নির্বাচন করুন</option>
                                    <option value="published">পাবলিশড (Public)</option>
                                    <option value="draft">ড্রাফট (Private)</option>
                                    <option value="archived">আর্কাইভ (Archived)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- seo tags section -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h3 class="text-base font-bold text-gray-800 mb-4">ট্যাগসমূহ (Tags)</h3>
                        <div class="flex flex-col gap-2">
                            <input v-model="form.tags" type="text" placeholder="উদা: টকশো, রাজনীতি, বিসিবি"
                                class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none">
                            <p class="text-[10px] text-gray-400 italic">ট্যাগগুলো ভিডিওর নিচে এসইও র‍্যাঙ্কিংয়ে সাহায্য
                                করবে।</p>
                        </div>
                    </div>

                    <!-- action buttons section -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col gap-3">
                        <button type="submit"
                            class="w-full bg-[#003557] hover:bg-[#004a7c] text-white cursor-pointer py-3.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition transform active:scale-95 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-square-plus"></i> ভিডিও আপডেট করুন
                        </button>
                        <router-link to="/admin/video-gallery/index"
                            class="w-full text-center py-2 text-gray-500 hover:text-gray-800 font-medium transition">বাতিল</router-link>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import Notification from '../../../../helpers/Notification';
export default {
    data() {
        return {
            form: {
                title: '',
                video_url: '',
                video_id: '',
                category_id: '',
                status: '',
                tags: []
            },
            categories: [],
            youtubeId: null,
            id: this.$route.params.id,
            errors: {}
        }
    },
    watch: {
        'form.video_url'(newVal) {
            this.youtubeId = this.extractYouTubeId(newVal);
        }
    },
    mounted() {
        this.fetchVideo();
        this.fetchCategories();
    },
    methods: {
        fetchVideo() {
            axios.get(`/api/gallery/video/${this.id}`)
                .then(response => {
                    this.form = response.data.data;
                    this.youtubeId = this.extractYouTubeId(this.form.video_url);
                    this.form.tags = Array.isArray(response.data.data.tags) ? response.data.data.tags.map(t => t.name).join(', ') : response.data.data.tags;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        extractYouTubeId(url) {
            if (!url) return null;

            const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
            const match = url.match(regExp);
            this.form.video_id = (match && match[2].length === 11) ? match[2] : null;

            return this.form.video_id;
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
        updateVideo() {
            let formData = new FormData()
            formData.append('title', this.form.title)
            formData.append('video_url', this.form.video_url)
            formData.append('video_id', this.form.video_id)
            formData.append('category_id', this.form.category_id)
            formData.append('status', this.form.status)

            formData.append('_method', 'PUT')
            
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

            axios.post(`/api/gallery/video/update/${this.id}`, formData)
                .then(response => {
                    Notification.success('Video updated successfully');
                    this.$router.push({ name: 'adminVideoGalleryIndex' });
                })
                .catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                    Notification.error('Something went wrong');
                    console.log(error);
                });
        }
    },
}
</script>

<style scoped></style>