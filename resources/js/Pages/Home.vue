<script setup>
import CountDown from "../components/CountDown.vue";
import Donation from "../components/Donation/Donation.vue";
import Swiper from "../components/Swiper.vue";
import Testimonials from "../components/Testimonials.vue";
import UpCommingEvent from "../components/UpCommingEvent.vue";
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="Home"></Head>
    <Swiper />
    <div class="flex items-center mt-20 mx-56">
        <div class="why-chose-us-image-wrapper basis-1/2 relative">
            <img src="../../assets/images/swiper/slider2.jpg" alt="" />

            <div
                class="absolute left-0 bottom-0 bg-slate-100 mx-10 p-5 rounded-t-lg"
            >
                <p>
                    Lorem ipsum dolor sit amet, consectet adip awesome sede do
                    eiushhgmod tempor incididun ut labore and doloreses magna
                    aliqua. Ut enim ad minim veniam are nostrud lor exercitation
                    is most opertunity for every
                </p>
            </div>
        </div>
        <div class="right-sec basis-1/2 ml-14">
            <h4 class="horizontal-line">Why choose us</h4>
            <h1 class="mt-8 text-3xl font-medium">
                Heading title title title title title
            </h1>
            <h1 class="text-3xl font-medium">
                Heading title title
                <span class="text-red-600">title title title</span>
            </h1>
            <p class="mt-8 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing sed do
                eiushhgmose tempor incididun ut labore eth dolore magna aliqua.
                Ut enim ad mini ass veniam, arquis nostrud exercitation uj
                laboris nisi ut aliquip commodose consequat. Duis aute irure
                dolor in reprehenderit in volupj velit esse cillu dolore eu
                fugiat nulla pariatur. Excepteur
            </p>
            <p class="mt-5 text-justify">
                Voluptatem ac doloremque laudantium, totam rem aperiam, eaque
                ipsae quae ab illo inventore veritatis et qu architector beatae
                vitae dicta suntes explicabo. Nemo enim ipsam voluptatem
            </p>
            <!-- hover:bg-gray-100 hover:text-red-600 -->
            <button
                class="custom-slider-button mt-8 bg-theme-red text-white px-8 py-2 rounded-full font-medium"
            >
                Read More
            </button>
        </div>
    </div>

    <div class="mission-area bg-gray-100 mt-20 py-20">
        <div class="mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Our Mission
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">Short text about mission .........</p>
        </div>
        <div class="mission-row mt-10 px-56 flex items-center gap-5">
            <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            Mission Title...........
                        </h1>
                        <p class="mt-2">
                            Mission Detail Mission DetailMission DetailMission
                            DetailMission DetailMission DetailMission
                            DetailMission Detail
                        </p>
                    </div>
                </div>
                <div class="mission-hover py-20 px-5 bg-red-600 text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        Mission Title...........
                    </h1>
                    <p class="my-10">
                        Mission Detail Mission DetailMission DetailMission
                        DetailMission DetailMission DetailMission DetailMission
                        Detail
                    </p>
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">More  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

            <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            Mission Title...........
                        </h1>
                        <p class="mt-2">
                            Mission Detail Mission DetailMission DetailMission
                            DetailMission DetailMission DetailMission
                            DetailMission Detail
                        </p>
                    </div>
                </div>
                <div class="mission-hover py-20 px-5 bg-red-600 text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        Mission Title...........
                    </h1>
                    <p class="my-10">
                        Mission Detail Mission DetailMission DetailMission
                        DetailMission DetailMission DetailMission DetailMission
                        Detail
                    </p>
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">More  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

               <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            Mission Title...........
                        </h1>
                        <p class="mt-2">
                            Mission Detail Mission DetailMission DetailMission
                            DetailMission DetailMission DetailMission
                            DetailMission Detail
                        </p>
                    </div>
                </div>
                <div class="mission-hover py-20 px-5 bg-red-600 text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        Mission Title...........
                    </h1>
                    <p class="my-10">
                        Mission Detail Mission DetailMission DetailMission
                        DetailMission DetailMission DetailMission DetailMission
                        Detail
                    </p>
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">More  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

        </div>
    </div>

   <CountDown />

    <UpCommingEvent />

    <div class="video-testimonials-wrapper flex mt-20">
        <iframe
            width="100%"
            height="400vh"
            src="https://www.youtube.com/embed/S1dNuCG3sOA"
            title="ENGLISH SPEECH | BARACK OBAMA: The People of India (English Subtitles)"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
        ></iframe>
        <Testimonials />
    </div>

    <Donation />

    <!-- refresh page but doesnot go at top use preserve-scroll -->
    <!-- <Link class="mt-[600px] block" href="/" preserve-scroll>Refresh</Link> -->
</template>
