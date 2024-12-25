<script setup>
import { defineProps } from 'vue';
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
    <div class="upcomming-event bg-white py-20">
        <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                आगामी कार्यक्रम
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">
                परिवर्तनको लागि सँगसँगै
            </p>
        </div>
        <div class="upcomming-event-row flex flex-col lg:flex-row items-center mt-10 px-5 lg:px-56 gap-7">
            <Link :href="route('event.detail',event[0].slug)" class="mission-container basis-1/2 group">
                <div class="image-wrapper relative">
                    <img :src="event[0].image?'/storage/'+ event[0].image:'/noimage.png'" alt="" class="w-full h-80 object-cover" />
                    <div class="date-wrapper absolute bg-red-500 py-4 px-6 text-white font-bold text-xl text-center bottom-0 z-10">
                        <h2>{{ formatDate(event[0].event_date).day }}</h2>
                        <h2>{{ formatDate(event[0].event_date).month }}</h2>
                    </div>
                    <!-- Overlay background color on hover -->
                    <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                </div>
                <div class="title-detail-wrapper py-6 px-4 bg-white custom-shadow">
                    <h1 class="text-xl font-medium group-hover:text-red-600">{{ event[0].title.length>50 ? event[0].title.substring(0, 50) + ' ...':event[0].title }}</h1>
                    <p class="mt-2 text-justify">
                        {{ event[0].detail.length>200 ? event[0].detail.substring(0,200)+ '...':event[0].detail}}
                    </p>
                </div>
            </Link>

        <div class="right-section basis-1/2">
            <div v-for="(item,index) in event.slice(1)":key="item.title">
               <Link :href="route('event.detail',item.slug)" class="latest-event group custom-shadow flex gap-5 p-5 basis-1/2 my-5">
                <div class="date-wrapper bg-red-500 pt-8 px-6 text-white font-bold text-xl text-center">
                    <div class="flex-col justify-end items-end">
                        <h2>{{ formatDate(item.event_date).day }}</h2>
                        <h2>{{ formatDate(item.event_date).month }}</h2>
                    </div>
                </div>
                <div class="right-wrapper">
                    <h1 class="event-title text-xl font-medium group-hover:text-red-500">
                        {{ item.title.length>40 ? item.title.substring(0,40)+'...':item.title }}
                    </h1>
                   
                    <p>
                        {{ item.detail.length>100 ? item.detail.substring(0,100)+'...':item.detail }}
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
    </div>
</template>
