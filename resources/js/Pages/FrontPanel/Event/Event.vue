<script setup>
import PageHeader from '../../../components/PageHeader.vue';
defineProps({
  event: {
    type: Array,
    default: () => []
  }
});
function formatDate(dateString) {
  if (!dateString) return { day: 'N/A', month: 'N/A' }; 
  const dateObj = new Date(dateString);
  const day = dateObj.getDate().toString().padStart(2, '0'); 
  const month = dateObj.toLocaleString('en-US', { month: 'short' });
  return { day, month };
}
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="कार्यक्रम"></Head>
    <PageHeader pageheader="कार्यक्रम विवरण" />
        <div class="upcomming-event bg-white py-20">
            <div class="mx-5 lg:mx-56">
                <h1 class="title-section text-3xl text-center font-medium">
                    आगामी कार्यक्रम
                </h1>
                <div class="mt-8 w-48 m-auto">
                    <img
                        src="../../../../assets/images/icon/icon.png"
                        alt=""
                        class=""
                    />
                </div>
                <p class="text-center mt-2">
                    परिवर्तनको लागि हामीसँग सँगै सामेल हुनुहोस!
                </p>
            </div>
            <div
                class="upcomming-event-row mt-10 px-5 flex flex-col lg:flex-row items-center gap-5 lg:px-56">
                <div v-for="(item,index) in event" :key="item.title" class="mission-container basis-[31%] group">
                    <Link :href="route('event.detail',item.slug)">
                    <div class="image-wrapper relative">
                        <img class="h-36"
                            :src="item.image ? '/storage/'+item.image:'/noimage.png'"
                            alt=""
                        />
                        <div
                            class="date-wrapper absolute bg-red-500 py-4 px-6 text-white font-bold text-xl text-center bottom-0 z-10"
                        >
                        <h2>{{ formatDate(item.event_date).day }}</h2>
                        <h2>{{ formatDate(item.event_date).month }}</h2>
                        </div>
                          <!-- Overlay background color on hover -->
                      <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                    >
                        <h1 class="text-xl font-medium group-hover:text-red-600">  {{ item.title.length>20 ? item.title.substring(0,20)+'...':item.title }}</h1>
                        <p class="mt-2">
                            {{ item?.detail?.length>50 ? item.detail.substring(0,50)+'...':item.detail }}
                        </p>
                        <div class="flex items-center gap-2 mt-1 mb-2">
                        <!-- <font-awesome-icon :icon="['far', 'clock']" /> -->
                        <!-- <h1 class="mr-3">10 AM</h1> -->
                        <font-awesome-icon :icon="['fas', 'location-dot']" />
                        <h1> {{item.address}}</h1>
                    </div>
                    </div>
                </Link>
                </div>
            </div>
        </div>
</template>
