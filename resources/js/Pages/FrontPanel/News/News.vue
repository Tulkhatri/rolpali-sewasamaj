<script setup>
import PageHeader from '../../../components/PageHeader.vue';
defineProps({
  news: {
    type: Array,
    default: () => []
  }
});
function formatDate(dateString) {
  if (!dateString) return 'N/A';

  const dateObj = new Date(dateString);
  const day = dateObj.getDate().toString().padStart(2, '0');
  const month = dateObj.toLocaleString('en-US', { month: 'short' });
  const year = dateObj.getFullYear();

  return `${day}-${month}-${year}`;
}
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="समाचार"></Head>
    <PageHeader pageheader="समाचार" />
    <div class="upcomming-event bg-white py-20">
        <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">समाचार</h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">रोल्पाली सेवा समाजले नेपालको सबैभन्दा जोखिममा परेकाहरूका लागि आशा ल्याउँछ, आवश्यक सहयोग प्रदान गर्दै र अटल करुणाका साथ जीवनलाई सशक्त बनाउँछ।</p>
        </div>
        <div
            class="upcomming-event-row mt-10 px-5 lg:px-56 flex flex-col lg:flex-row items-center gap-5 flex-wrap"
        >
            <div v-for="(item,index) in news" :key="item.title" class="mission-container basis-[32%] group">
                <Link :href="route('news.detail',item.slug)">
                <div class="image-wrapper relative">
                    <img :src="item.image? '/storage/'+item.image:'/noimage.png'" alt="" class="h-52"/>
                     <!-- Overlay background color on hover -->
                     <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                </div>
                <div
                    class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                >
                    <h1 class="text-xl font-medium group-hover:text-red-600">{{ item.title.length>20 ? item.title.substring(0,20)+'...':item.title }}</h1>
                    <p class="mt-2">
                        {{ item?.detail?.length>50 ? item.detail.substring(0,50)+'...':item.detail }}
                    </p>
                </div>
                <h1 class="border-red-100 custom-shadow py-2 px-3">
                    <font-awesome-icon
                        :icon="['fas', 'calendar-days']"
                        class="text-red-600"
                    />
                    {{formatDate(item.created_at) }}
                </h1>
            </Link>
            </div>
        </div>
    </div>
</template>
