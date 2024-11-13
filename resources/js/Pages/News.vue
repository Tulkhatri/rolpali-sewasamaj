<script setup>
import PageHeader from "../components/PageHeader.vue";
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="News"></Head>
    <PageHeader pageheader="News" />
    <div class="upcomming-event bg-white py-20">
        <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">News</h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">Rolpali Sewa Samaj brings hope to Nepal's most vulnerable, offering essential support and empowering lives with unwavering compassion.</p>
        </div>
        <div
            class="upcomming-event-row mt-10 px-5 lg:px-56 flex flex-col lg:flex-row items-center gap-5 flex-wrap"
        >
            <div class="mission-container basis-[32%] group">
                <div class="image-wrapper relative">
                    <img src="../../assets/images/donate2.jpg" alt="" />
                     <!-- Overlay background color on hover -->
                     <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                </div>
                <div
                    class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                >
                    <h1 class="text-xl font-medium group-hover:text-red-600">Title</h1>
                    <p class="mt-2">
                        Details
                    </p>
                </div>
                <h1 class="border-red-100 custom-shadow py-2 px-3">
                    <font-awesome-icon
                        :icon="['fas', 'calendar-days']"
                        class="text-red-600"
                    />
                    25-Aug-2024
                </h1>
            </div>
            <div class="mission-container basis-[32%] group">
                <div class="image-wrapper relative">
                    <img src="../../assets/images/donate1.jpg" alt="" />
                     <!-- Overlay background color on hover -->
                     <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                </div>
                <div
                    class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                >
                    <h1 class="text-xl font-medium group-hover:text-red-600">Title</h1>
                    <p class="mt-2">
                        Details
                    </p>
                </div>
                <h1 class="border-red-100 custom-shadow py-2 px-3">
                    <font-awesome-icon
                        :icon="['fas', 'calendar-days']"
                        class="text-red-600"
                    />
                    26-Aug-2024
                </h1>
            </div>
            <div class="mission-container basis-[32%] group">
                <div class="image-wrapper relative">
                    <img src="../../assets/images/donate2.jpg" alt="" />
                     <!-- Overlay background color on hover -->
                     <div class="absolute inset-x-0 bottom-0 h-0 group-hover:h-full bg-[rgba(29,37,55,0.8)] transition-all duration-300 ease-in-out"></div>
                </div>
                <div
                    class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                >
                    <h1 class="text-xl font-medium group-hover:text-red-600">Title</h1>
                    <p class="mt-2">
                        Details
                    </p>
                </div>
                <h1 class="border-red-100 custom-shadow py-2 px-3">
                    <font-awesome-icon
                        :icon="['fas', 'calendar-days']"
                        class="text-red-600"
                    />
                    30-Aug-2024
                </h1>
            </div>
        </div>
    </div>
</template>
