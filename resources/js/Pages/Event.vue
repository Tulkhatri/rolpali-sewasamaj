<script setup>
import PageHeader from "../components/PageHeader.vue";
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="Events"></Head>
    <PageHeader pageheader="Events" />
        <div class="upcomming-event bg-white py-20">
            <div class="mx-5 lg:mx-56">
                <h1 class="title-section text-3xl text-center font-medium">
                    Up Comming Events
                </h1>
                <div class="mt-8 w-48 m-auto">
                    <img
                        src="../../assets/images/icon/icon.png"
                        alt=""
                        class=""
                    />
                </div>
                <p class="text-center mt-2">
                    Together for Change: Join Us in Making a Difference!
                </p>
            </div>
            <div
                class="upcomming-event-row mt-10 px-5 flex flex-col lg:flex-row items-center gap-5 lg:px-56">
                <div class="mission-container basis-[31%] group">
                    <div class="image-wrapper relative">
                        <img
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                        <div
                            class="date-wrapper absolute bg-red-500 py-4 px-6 text-white font-bold text-xl text-center bottom-0 z-10"
                        >
                            <h2>20</h2>
                            <h2>Dec</h2>
                        </div>
                          <!-- Overlay background color on hover -->
                      <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                    >
                        <h1 class="text-xl font-medium group-hover:text-red-600">Event</h1>
                        <p class="mt-2">
                            Our Next Event...
                        </p>
                    </div>
                </div>
                <div class="mission-container basis-[31%] group">
                    <div class="image-wrapper relative">
                        <img
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                        <div
                            class="date-wrapper absolute bg-red-500 py-4 px-6 text-white font-bold text-xl text-center bottom-0 z-10"
                        >
                            <h2>25</h2>
                            <h2>Dec</h2>
                        </div>
                          <!-- Overlay background color on hover -->
                      <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                    >
                        <h1 class="text-xl font-medium group-hover:text-red-600">Event</h1>
                        <p class="mt-2">
                            Our Next Event...
                        </p>
                    </div>
                </div>
                <div class="mission-container basis-[31%] group">
                    <div class="image-wrapper relative">
                        <img
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                        <div
                            class="date-wrapper absolute bg-red-500 py-4 px-6 text-white font-bold text-xl text-center bottom-0 z-10"
                        >
                            <h2>27</h2>
                            <h2>Dec</h2>
                        </div>
                          <!-- Overlay background color on hover -->
                      <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                    >
                        <h1 class="text-xl font-medium group-hover:text-red-600">Event</h1>
                        <p class="mt-2">
                            Our Next Event...
                        </p>
                    </div>
                </div>
                <div class="mission-container basis-[31%] group">
                    <div class="image-wrapper relative">
                        <img
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                        <div
                            class="date-wrapper absolute bg-red-500 py-4 px-6 text-white font-bold text-xl text-center bottom-0 z-10"
                        >
                            <h2>30</h2>
                            <h2>Dec</h2>
                        </div>
                          <!-- Overlay background color on hover -->
                      <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                    >
                        <h1 class="text-xl font-medium group-hover:text-red-600">Event</h1>
                        <p class="mt-2">
                            Our Next Event...
                        </p>
                    </div>
                </div>
            </div>
        </div>
</template>
