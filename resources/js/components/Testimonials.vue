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
        class="swiper-testimonials  bg-red-600"
    >
        <swiper-slide class="testimonials pt-20 px-5 md:px-20 pb-14">
            <font-awesome-icon
                :icon="['fas', 'quote-left']"
                class="text-white text-4xl"
            />
            <p class="text-white mt-10 text-justify">
                Rolpali Sewa Samaj is a beacon of hope in Nepal, providing essential support and empowerment
                 to underprivileged and differently-abled individuals. Their compassionate work is truly inspiring.
            </p>
            <div class="image-wrapper mt-8 flex items-center gap-5">
                <img src="../../assets/images/swiper/slider2.jpg" alt="" />
                <div class="name-designation text-white">
                    <p class="font-bold whitespace-nowrap">Tul Bahadur Khatri</p>
                    <p class="whitespace-nowrap">Software Engineer</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide class="testimonials pt-20 px-5 md:px-20 pb-14">
            <font-awesome-icon
                :icon="['fas', 'quote-left']"
                class="text-white text-4xl"
            />
            <p class="text-white mt-10 text-justify">
                Rolpali Sewa Samaj is a beacon of hope in Nepal, providing essential support and empowerment to
                underprivileged and differently-abled individuals. Their compassionate work is truly inspiring.
            </p>
            <div class="image-wrapper mt-8 flex items-center gap-5">
                <img src="../../assets/images/swiper/slider2.jpg" alt="" />
                <div class="name-designation text-white">
                    <p class="font-bold whitespace-nowrap">Tul Bahadur Khatri</p>
                    <p class="whitespace-nowrap">Software Engineer</p>
                </div>
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
