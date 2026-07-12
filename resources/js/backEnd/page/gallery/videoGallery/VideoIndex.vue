<template>
    <div class="p-2 md:p-4 font-sans">
        <!-- page header, breadcrumb and add button -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-circle-play text-red-500"></i> ভিডিও গ্যালারি তালিকা
                </h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">ভিডিও তালিকা</span>
                </nav>
            </div>
            <router-link to="/admin/video-gallery/create"
                class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all duration-300 flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-plus-circle"></i> নতুন ভিডিও যোগ করুন
            </router-link>
        </div>

        <!-- filter and search bar -->
        <div
            class="bg-white p-5 rounded-t-3xl border-x border-t border-gray-100 grid grid-cols-1 md:grid-cols-4 gap-4 mb-1">
            <div class="relative md:col-span-2">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input v-model="search" type="text" placeholder="ভিডিওর শিরোনাম দিয়ে খুঁজুন..."
                    class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
            </div>
            <select v-model="filterCategory"
                class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">সব ক্যাটাগরি</option>
                <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
            </select>
            <select v-model="filterStatus"
                class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-600 outline-none focus:ring-2 focus:ring-blue-500 transition cursor-pointer">
                <option value="">সব স্ট্যাটাস</option>
                <option value="published">পাবলিশড</option>
                <option value="draft">ড্রাফট</option>
                <option value="archived">আর্কাইভড</option>
            </select>
        </div>

        <!-- video grid library -->
        <div class="bg-white p-6 rounded-b-3xl shadow-xl shadow-gray-200/50 border-x border-b border-gray-100">
            <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">

                <div v-for="video in videos" :key="video.id"
                    class="group bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full">

                    <div>
                        <!-- youtube thumbnail -->
                        <div class="relative aspect-video overflow-hidden bg-black">
                            <img :src="`https://img.youtube.com/vi/${video.video_id}/mqdefault.jpg`"
                                class="w-full h-full object-cover">
                        </div>

                        <div class="p-4 space-y-3 h-28 flex flex-col justify-between">
                            <h4
                                class="text-sm font-bold text-gray-800 line-clamp-2 leading-snug hover:text-blue-600 transition cursor-pointer">
                                {{ video.title }}
                            </h4>

                            <div class="flex justify-between items-center text-xs">
                                <span class="px-2.5 py-1 rounded-md font-bold bg-blue-50 text-blue-700 uppercase">
                                    {{ video.category }}
                                </span>
                                <span v-if="video.status === 'published'"
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full font-bold bg-green-100 text-green-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> পাবলিশড
                                </span>
                                <span v-else-if="video.status === 'draft'"
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full font-bold bg-orange-100 text-orange-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> ড্রাফট
                                </span>
                                <span v-else
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full font-bold bg-gray-100 text-gray-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-500"></span> আর্কাইভড
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- card actions -->
                    <div class="px-4 py-3 bg-gray-50 border-t border-gray-100 flex justify-end gap-2 mt-auto">
                        <router-link :to="{ name: 'adminVideoEdit', params: { id: video.id } }"
                            class="p-2 text-gray-400 hover:text-green-600 hover:bg-green-100 rounded-lg transition"
                            title="এডিট"><i class="fa-solid fa-pen-to-square"></i></router-link>
                        <button @click="deleteVideo(video.id)"
                            class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-100 rounded-lg transition"
                            title="ডিলিট"><i class="fa-solid fa-trash-can"></i></button>
                    </div>

                </div>
            </div>

            <!-- pagination section -->
            <div
                class="mt-8 pt-6 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-500">
                <span v-if="meta.total" class="font-medium">মোট {{ meta.total }}টি ভিডিওর মধ্যে {{ meta.from }}-{{
                    meta.to }} দেখানো হচ্ছে</span>
                <div class="flex gap-2">
                    <button @click="fetchVideos(meta.current_page - 1)" :disabled="meta.current_page === 1"
                        :class="meta.current_page === 1 ? 'px-4 py-2 bg-white border border-gray-200 rounded-xl font-bold hover:bg-gray-50 transition opacity-50 cursor-not-allowed' : 'px-4 py-2 bg-white border border-gray-200 rounded-xl font-bold hover:bg-gray-50 transition'">Previous</button>
                    <button @click="fetchVideos(meta.current_page + 1)" :disabled="meta.current_page === meta.last_page"
                        :class="meta.current_page === meta.last_page ? 'px-4 py-2 bg-white border border-gray-200 rounded-xl font-bold hover:bg-gray-50 transition opacity-50 cursor-not-allowed' : 'px-4 py-2 bg-white border border-gray-200 rounded-xl font-bold hover:bg-gray-50 transition'">Next</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            videos: [],
            categories: [],
            search: '',
            filterCategory: '',
            filterStatus: '',
            meta: {},

        }
    },
    watch: {
        search() {
            this.fetchVideos();
        },
        filterCategory() {
            this.fetchVideos();
        },
        filterStatus() {
            this.fetchVideos();
        }
    },
    mounted() {
        this.fetchVideos();
        this.fetchCategories();
    },
    methods: {
        fetchVideos(page = 1) {
            axios.get('/api/gallery/video', {
                params: {
                    page: page,
                    search: this.search,
                    category_id: this.filterCategory,
                    status: this.filterStatus
                }
            })
                .then(response => {
                    this.videos = response.data.data;
                    this.meta = response.data.meta;

                    console.log(this.videos);
                    console.log(this.meta);
                    console.log(this.categories);
                })
                .catch(error => {
                    console.log(error);
                });
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
        deleteVideo(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your video has been deleted.",
                        icon: "success"
                    });
                    axios.delete(`/api/gallery/video/delete/${id}`)
                        .then(response => {
                            Notification.success("Video deleted successfully");
                            this.videos = this.videos.filter(video => video.id !== id);
                        })
                        .catch(error => {
                            Notification.error("Video delete failed");
                            console.log(error);
                        });
                }
            });
        }
    }
}
</script>

<style scoped>
/* প্রফেশনাল গ্রিড অ্যানিমেশন */
.rounded-2xl {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style>