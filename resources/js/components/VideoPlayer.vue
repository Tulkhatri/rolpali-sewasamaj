<template>
    <swiper
        :modules="modules"
        :slides-per-view="1"
        :loop="true"
        :autoplay="{ delay: 2000, disableOnInteraction: false }"
        :speed="1500"
        navigation
        @swiper="onSwiper"
        @slideChange="onSlideChange"
    >
        <swiper-slide class="swiper-slide relative">
            <img src="../../assets/images/swiper/slider1.jpeg" alt="" />
            <div class="absolute inset-0 bg-sky-600/60"></div>
            <div class="absolute bottom-32 left-56 text-white">
                <h2 class="text-3xl">Video plear</h2>
                <p class="lg my-3">video plear</p>
                <button
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-red-500"
                >
                    Contact Us
                </button>
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
};
</script>
