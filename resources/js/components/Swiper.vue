<script setup>
import { ref } from "vue";
import { Navigation, A11y, Autoplay } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";

defineProps({
  slider: Array,
});
const modules = ref([Navigation, A11y, Autoplay]);
const onSwiper = (swiper) => {
  console.log(swiper);
};
const onSlideChange = () => {
  console.log("slide change");
};
const scrollToSection = () => {
  const section = document.getElementById("contactus");
  if (section) {
    section.scrollIntoView({ behavior: "smooth" });
  } else {
    console.error("Section not found.");
  }
};
</script>
<template>
    <swiper
        :modules="modules"
        :slides-per-view="1"
        :loop="true"
        :autoplay="{ delay: 2000, disableOnInteraction: false }"
        :speed="1500"
        
        :breakpoints="{
        // 640: { slidesPerView: 1 },
        // 768: { slidesPerView: 2 },
        // 1024: { slidesPerView: 3 }
         }"

        navigation
        @swiper="onSwiper"
        @slideChange="onSlideChange"
        class="swiper-slide"
    >
        <swiper-slide v-for="(item,index) in slider":key="item.title" class="swiper-slide h-[35vh] md:h-[73vh]">
            <img :src="item.image ? '/storage/' + item.image : 'noimage.png'" alt="" class="w-full" />
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 lg:left-56 text-white text-center w-full md:text-left">
                <h2 class="text-xl md:text-2xl mb-5">{{item.title}}</h2>
                <!-- <p class="lg my-3">port when you need it contact us</p> -->
                <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                सम्पर्क गर्नुहोस
                </a>
            </div>
        </swiper-slide>
    </swiper>
</template>
