<script setup>
import CountDown from "../../../components/CountDown.vue";
import Donation from "../../../components/Donation/Donation.vue";
import Swiper from "../../../components/Swiper.vue";
import Testimonials from "../../../components/Testimonials.vue";
import UpCommingEvent from "../../../components/UpCommingEvent.vue";
defineProps({
    aboutus:Object,
    slider:Array,
    event:Array,
    donation:Array
});
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="होमपेज"></Head>
    <Swiper :slider="slider"/>
    <div class="flex flex-col items-center mt-20 mx-5 lg:mx-56 lg:flex-row gap-5">
        <div class="why-chose-us-image-wrapper basis-1/2 relative">
            <img :src="aboutus.chairman_image ? '/storage/' + aboutus.chairman_image : '/noimage.png'" alt="" />

            <div
                class="absolute left-0 bottom-0 bg-slate-100 mx-5 lg:mx-10 p-5 rounded-t-lg"
            >
                <p class="text-justify">
                   {{ aboutus.chairman_message }}
                </p>
            </div>
        </div>
        <div class="right-sec basis-1/2 lg:ml-14">
            <h4 class="horizontal-line">हाम्रो बारेमा</h4>
            <h1 class="mt-8 text-xl md:text-2xl font-medium">
               {{aboutus.aboutus_title}}
            </h1>
           
            <p class="mt-8 text-justify whitespace-pre-line">
                {{aboutus.aboutus_detail}}
            </p>
           
            <!-- hover:bg-gray-100 hover:text-red-600 -->
             <div class="flex items-center justify-center md:justify-end">
            <Link :href="route('home.detail')"
                class="custom-slider-button mt-8 bg-theme-red text-white px-8 py-2 rounded-full font-medium"
            >
            थप पढ्नुहोस
            </Link>
        </div>
        </div>
    </div>

    <div class="mission-area bg-gray-100 mt-20 py-20">
        <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-xl md:text-2xl text-center font-medium">
                हाम्रो मिशन
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2"> {{aboutus.mission_short_quote}}</p>
        </div>
        <div class="mission-row mt-10 px-5 flex items-center flex-col lg:flex-row lg:px-56  gap-5">
            <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                       <img class="h-56"
                            :src="aboutus.mission1_image ? '/storage/'+ aboutus.mission1_image : '/noimage.png'"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            {{ aboutus.mission1_title.length>30 ? aboutus.mission1_title.substring(0,30) + ' ...':aboutus.mission1_title  }}
                        </h1>
                        <p class="mt-2">
                            {{ aboutus.mission1_detail.length>100 ? aboutus.mission1_detail.substring(0,100) + ' ...':aboutus.mission1_detail  }}
                        </p>
                    </div>
                </div>
                <div class="mission-hover py-20 px-5 bg-red-600 text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        {{ aboutus.mission1_title.length>30 ? aboutus.mission1_title.substring(0,30) + ' ...':aboutus.mission1_title  }}
                    </h1>
                    <p class="my-10">
                         {{ aboutus.mission2_detail.length>100 ? aboutus.mission2_detail.substring(0,100) + ' ...':aboutus.mission2_detail  }}
                    </p>
                        <Link :href="route('mission.detail')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">थप पढ्नुहोस  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

            <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img class="h-56"
                            :src="aboutus.mission2_image ? '/storage/'+ aboutus.mission2_image : '/noimage.png'"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            {{ aboutus.mission2_title.length>30 ? aboutus.mission2_title.substring(0,30) + ' ...':aboutus.mission2_title  }}
                        </h1>
                        <p class="mt-2">
                            {{ aboutus.mission2_detail.length>100 ? aboutus.mission2_detail.substring(0,100) + ' ...':aboutus.mission2_detail  }}
                        </p>
                    </div>
                </div>
                <div class="mission-hover py-20 px-5 bg-red-600 text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        {{ aboutus.mission2_title.length>30 ? aboutus.mission2_title.substring(0,30) + ' ...':aboutus.mission2_title  }}
                    </h1>
                    <p class="my-10">
                         {{ aboutus.mission2_detail.length>100 ? aboutus.mission2_detail.substring(0,100) + ' ...':aboutus.mission2_detail  }}
                    </p>
                        <Link :href="route('mission.detail')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">थप पढ्नुहोस  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

            <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img class="h-56"
                            :src="aboutus.mission3_image ? '/storage/'+ aboutus.mission3_image : '/noimage.png'"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            {{ aboutus.mission3_title.length>30 ? aboutus.mission3_title.substring(0,30) + ' ...':aboutus.mission3_title  }}
                        </h1>
                        <p class="mt-2">
                            {{ aboutus.mission3_detail.length>100 ? aboutus.mission3_detail.substring(0,100) + ' ...':aboutus.mission3_detail  }}
                        </p>
                    </div>
                </div>
                <div class="mission-hover py-20 px-5 bg-red-600 text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        {{ aboutus.mission3_title.length>30 ? aboutus.mission3_title.substring(0,30) + ' ...':aboutus.mission3_title  }}
                    </h1>
                    <p class="my-10">
                         {{ aboutus.mission2_detail.length>100 ? aboutus.mission2_detail.substring(0,100) + ' ...':aboutus.mission2_detail  }}
                    </p>
                        <Link :href="route('mission.detail')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">थप पढ्नुहोस  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

        </div>
    </div>

   <CountDown />

    <UpCommingEvent :event="event"/>

    <div class="video-testimonials-wrapper w-[100%] flex flex-col lg:flex-row mt-20">
        <iframe
            width="100%"
            height="400vh"
            src="https://www.youtube.com/embed/GQyb3Q4H4Rg?si=KnZeXIg4dksoqzJJ"
            title="ENGLISH SPEECH | BARACK OBAMA: The People of India (English Subtitles)"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
        ></iframe>
        <Testimonials />
    </div>

    <Donation :donation="donation"/>

    <!-- refresh page but doesnot go at top use preserve-scroll -->
    <!-- <Link class="mt-[600px] block" href="/" preserve-scroll>Refresh</Link> -->
</template>
