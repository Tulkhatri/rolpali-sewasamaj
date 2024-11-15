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
        <swiper-slide class="swiper-slide h-[35vh] md:h-[73vh]">
            <img src="../../assets/images/donate1.jpg" alt="" class="w-full" />
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-5 lg:left-56 text-white text-center w-full md:text-left">
                <h2 class="text-xl md:text-2xl mb-5">Need assistance? We're here to help</h2>
                <!-- <p class="lg my-3">port when you need it contact us</p> -->
                <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
                </a>
            </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide h-[35vh] md:h-[73vh]">
            <img src="../../assets/images/emporing.jpg" alt="" class="w-full"/>
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-5 lg:left-56 text-white text-center w-full md:text-left">
                <h2 class="text-xl md:text-2xl mb-5">Need assistance? We're here to help</h2>
                <!-- <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide h-[35vh] md:h-[73vh]">
            <img src="../../assets/images/brightfuture.jpg" alt="" class="w-full"/>
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-5 lg:left-56 text-white text-center w-full md:text-left">
                <h2 class="text-xl md:text-2xl mb-5">Need assistance? We're here to help</h2>
                <!-- <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide h-[35vh] md:h-[73vh]">
            <img src="../../assets/images/donate3.jpeg" alt="" class="w-full"/>
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-5 lg:left-56 text-white text-center w-full md:text-left">
                <h2 class="text-xl md:text-2xl mb-5">Need assistance? We're here to help</h2>
                <!-- <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>

        <swiper-slide class="swiper-slide h-[35vh] md:h-[73vh]">
            <img src="../../assets/images/donate2.jpg" alt="" class="w-full"/>
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-5 lg:left-56 text-white text-center w-full md:text-left">
                <h2 class="text-xl md:text-2xl mb-5">Need assistance? We're here to help</h2>
                <!-- <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide h-[35vh] md:h-[73vh]">
            <img src="../../assets/images/disable.jpeg" alt="" class="w-full"/>
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-5 lg:left-56 text-white text-center w-full md:text-left">
                <h2 class="text-xl md:text-2xl mb-5">Need assistance? We're here to help</h2>
                <!-- <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>
    </swiper>
</template>

<script>
// import Swiper core and required modules
import { Navigation, A11y, Autoplay } from "swiper/modules";

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/navigation";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log("slide change");
        };
        return {
            onSwiper,
            onSlideChange,
            modules: [Navigation, A11y, Autoplay],
        };
    },

    methods: {
    scrollToSection() {
      const section = document.getElementById('contactus');
      if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
      } else {
        console.error('Section not found.');
      }
    }
  }
  
};
</script>
