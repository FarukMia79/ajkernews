<template>
    <div class="p-2 md:p-6 font-sans max-w-[1600px] mx-auto">
        <!-- page header and breadcrumb -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-800 tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-images text-cyan-500"></i> ফটো গ্যালারি ম্যানেজমেন্ট
                </h1>
                <nav class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <span>অ্যাডমিন</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    <span class="text-blue-600 font-medium">ফটো গ্যালারি</span>
                </nav>
            </div>
            <!-- upload button -->
            <router-link to="/admin/photo-gallery/upload" class="bg-[#003557] hover:bg-[#004a7c] text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center gap-2 transform active:scale-95">
                <i class="fa-solid fa-cloud-arrow-up"></i> নতুন ছবি আপলোড
            </router-link>
        </div>

        <!-- image upload area -->
        <div class="mb-10 bg-white p-8 rounded-3xl border-2 border-dashed border-gray-200 text-center hover:border-blue-400 transition cursor-pointer group">
            <i class="fa-solid fa-file-image text-5xl text-gray-300 group-hover:text-blue-500 transition-all mb-4"></i>
            <h3 class="text-lg font-bold text-gray-700">এখানে ছবি ড্র্যাগ করে ছাড়ুন অথবা ক্লিক করুন</h3>
            <p class="text-sm text-gray-400 mt-1 italic">সর্বোচ্চ ফাইল সাইজ: ২ এমবি (JPG, PNG, WebP)</p>
        </div>

        <!-- search and filter -->
        <div class="flex justify-between items-center mb-6 gap-4">
            <h2 class="text-xl font-bold text-gray-700">গ্যালারি লাইব্রেরি ({{ meta.total }} টি ছবি)</h2>
            <div class="relative w-full md:w-72">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input v-model="search" type="text" placeholder="ক্যাপশন দিয়ে খুঁজুন..." 
                       class="w-full pl-11 pr-4 py-2.5 bg-white border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
            </div>
        </div>

        <!-- photo grid library -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            
            <!-- photo card loop -->
            <div v-for="photo in photos" :key="photo.id" class="group bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300">
                
                <!-- image preview -->
                <div class="relative aspect-video overflow-hidden bg-gray-100">
                    <img :src="photo.image" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- quick action on image -->
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2">
                        <button class="p-2 bg-white text-gray-800 rounded-full hover:bg-blue-500 hover:text-white transition" title="বড় করে দেখুন">
                            <i class="fa-solid fa-maximize text-sm"></i>
                        </button>
                        <button @click="deletePhoto(photo.id)" class="p-2 bg-white text-red-600 rounded-full hover:bg-red-600 hover:text-white transition" title="ডিলিট করুন">
                            <i class="fa-solid fa-trash-can text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- info section -->
                <div class="p-3">
                    <p class="text-xs font-bold text-gray-800 line-clamp-1 mb-1">{{ photo.caption }}</p>
                    <div class="flex justify-between items-center text-[10px] text-gray-400 font-medium">
                        <span>{{ new Date(photo.date).toLocaleDateString('bn-BD', { year: 'numeric', month: 'long', day: 'numeric' }) }}</span>
                        <span class="px-2 py-0.5 bg-gray-100 rounded text-gray-500 uppercase tracking-tighter italic">{{ photo.size }} MB</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- pagination -->
        <div class="mt-10 flex justify-center">
            <div class="flex gap-2">
                <button @click="previousPage" :class="meta.current_page > 1 ? 'px-5 py-2 bg-white border border-gray-200 rounded-xl font-bold text-gray-700 hover:bg-gray-50' : 'px-5 py-2 bg-white border border-gray-200 rounded-xl font-bold text-gray-400 cursor-not-allowed'">Previous</button>
                <button v-for="page in meta.last_page" :key="page" :class="{'bg-[#003557] text-white': page === meta.current_page, 'bg-white border border-gray-200 text-gray-700 hover:bg-gray-50': page !== meta.current_page}" class="px-5 py-2 rounded-xl font-bold shadow-md">{{ page }}</button>
                <button @click="nextPage" :class="meta.current_page < meta.last_page ? 'px-5 py-2 bg-white border border-gray-200 rounded-xl font-bold text-gray-700 hover:bg-gray-50' : 'px-5 py-2 bg-white border border-gray-200 rounded-xl font-bold text-gray-400 cursor-not-allowed'">Next</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            photos: [],
            meta: {},
            search: ''
        }
    },
    watch: {
        search() {
            this.getPhotos();
        }
    },
    mounted() {
        this.getPhotos();
    },
    methods: {
        getPhotos(page = 1) {
            axios.get('/api/gallery/photo', {
                params: {
                    page: page,
                    search: this.search
                }
            })
                .then(response => {
                    this.photos = response.data.data;
                    this.meta = response.data.meta;
                    console.log(this.photos);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        deletePhoto(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your photo has been deleted.",
                        icon: "success"
                    });
                    axios.delete('/api/gallery/photo/' + id)
                        .then(response => {
                            this.photos = this.photos.filter(photo => photo.id !== id);
                        })
                        .catch(error => {
                            console.log(error);
                        });
                }
            })
        }
    }
}
</script>

<style scoped>
.rounded-2xl {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style>