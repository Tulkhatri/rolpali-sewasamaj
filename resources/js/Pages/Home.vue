<script setup>
import CountDown from "../components/CountDown.vue";
import Donation from "../components/Donation/Donation.vue";
import Swiper from "../components/Swiper.vue";
import Testimonials from "../components/Testimonials.vue";
import UpCommingEvent from "../components/UpCommingEvent.vue";
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="Home Page"></Head>
    <Swiper />
    <div class="flex flex-col items-center mt-20 mx-5 lg:mx-56 lg:flex-row gap-5">
        <div class="why-chose-us-image-wrapper basis-1/2 relative">
            <img src="../../assets/images/whychooseus.png" alt="" />

            <div
                class="absolute left-0 bottom-0 bg-slate-100 mx-5 lg:mx-10 p-5 rounded-t-lg"
            >
                <p class="text-justify">
                    Our goal at Rolpali Sewa Samaj is to uplift lives and foster hope across Nepal. Thank you for supporting our mission.
                    -Chairperson, Rolpali Sewa Samaj
                </p>
            </div>
        </div>
        <div class="right-sec basis-1/2 lg:ml-14">
            <h4 class="horizontal-line">About us</h4>
            <h1 class="mt-8 text-xl md:text-2xl font-medium">
                Empowering Lives and Building Hope
            </h1>
            <h1 class="text-xl md:text-2xl font-medium">
                 Across Nepal
                <span class="text-red-600">Rolpali Sewa Samaj</span>
            </h1>
            <p class="mt-8 text-justify">
                Rolpali Sewa Samaj is committed to supporting and uplifting the lives of underprivileged and disabled individuals in Rolpa and across Nepal. Through compassionate aid and community-centered initiatives, we provide essential resources, foster empowerment, and work towards a brighter, more inclusive future for all Nepalese.
            </p>
            <p class="mt-5 text-justify">
                 Driven by transparency and a deep sense of purpose, we strive to make a lasting impact on the communities we serve. Join us in our mission to bring hope and change where it's needed most.
            </p>
            <!-- hover:bg-gray-100 hover:text-red-600 -->
             <div class="flex items-center justify-center md:justify-end">
            <button
                class="custom-slider-button mt-8 bg-theme-red text-white px-8 py-2 rounded-full font-medium"
            >
                Read More
            </button>
        </div>
        </div>
    </div>

    <div class="mission-area bg-gray-100 mt-20 py-20">
        <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-xl md:text-2xl text-center font-medium">
                Our Mission
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">Empowering Communities, Transforming Lives, Building a Brighter Future for All.</p>
        </div>
        <div class="mission-row mt-10 px-5 flex items-center flex-col lg:flex-row lg:px-56  gap-5">
            <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img
                            src="../../assets/images/emporing.jpg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            Empowering the Underprivileged
                        </h1>
                        <p class="mt-2">
                           We work to uplift marginalized communities, providing resources and opportunities to help individuals lead dignified lives.
                        </p>
                    </div>
                </div>
                <div class="mission-hover py-20 px-5 bg-red-600 text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        Empowering the Underprivileged
                    </h1>
                    <p class="my-10">
                        We work to uplift marginalized communities, providing resources and opportunities to help individuals lead dignified lives.
                    </p>
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">More  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

            <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img
                            src="../../assets/images/disable.jpeg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            Supporting Disabled Individuals

                        </h1>
                        <p class="mt-2">
                            Our initiatives focus on enhancing the quality of life for disabled persons, ensuring they receive the care and support they deserve.
                        </p>
                    </div>
                </div>
                <div class="mission-hover py-20 px-5 bg-red-600 text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        Supporting Disabled Individuals

                    </h1>
                    <p class="my-10">
                        Our initiatives focus on enhancing the quality of life for disabled persons, ensuring they receive the care and support they deserve.
                    </p>
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">More  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

               <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img
                            src="../../assets/images/brightfuture.jpg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            Building a Brighter Future
                        </h1>
                        <p class="mt-2">
                            Through education, healthcare, and empowerment programs, we aim to create sustainable change for a stronger, more inclusive Nepal
                        </p>
                    </div>
                </div>
                <div class="mission-hover py-20 px-5 bg-red-600 text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        Building a Brighter Future
                    </h1>
                    <p class="my-10">
                        Through education, healthcare, and empowerment programs, we aim to create sustainable change for a stronger, more inclusive Nepal
                    </p>
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">More  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

        </div>
    </div>

   <CountDown />

    <UpCommingEvent />

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

    <Donation />

    <!-- refresh page but doesnot go at top use preserve-scroll -->
    <!-- <Link class="mt-[600px] block" href="/" preserve-scroll>Refresh</Link> -->
</template>
