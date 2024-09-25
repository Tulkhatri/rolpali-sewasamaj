<script setup></script>
<template>
    <div class="upcomming-event bg-white py-20">
        <div class="mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Up Comming Events
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam
            </p>
        </div>
        <div class="upcomming-event-row mt-10 px-56 flex items-center gap-7">
            <div class="mission-container basis-1/2">
                <div class="image-wrapper relative">
                    <img src="../../assets/images/swiper/slider3.jpeg" alt="" />
                    <div class="date-wrapper absolute bg-red-500 py-4 px-6 text-white font-bold text-xl text-center bottom-0">
                        <h2>28</h2>
                        <h2>May</h2>
                    </div>
                </div>
                <div
                    class="title-detail-wrapper py-6 px-4 bg-white custom-shadow"
                >
                    <h1 class="text-xl font-medium">Our Campaign</h1>
                    <p class="mt-2">
                        Lorem ipsum dolor sit amet, cata adipisicing morem ipsum
                        dolor sit amet, cata adipisese elit, sed do eiusmod
                        temapor
                    </p>
                </div>
            </div>
        <div class="right-section">
            <div class="latest-event group custom-shadow flex gap-5 p-5 basis-1/2">
                <div class="date-wrapper bg-red-500 pt-8 px-6 text-white font-bold text-xl text-center">
                    <div class="flex-col justify-end items-end">
                        <h2>28</h2>
                        <h2>May</h2>
                    </div>
                </div>
                <div class="right-wrapper">
                    <h1 class="event-title text-xl font-medium group-hover:text-red-500">
                        Political conferences
                    </h1>
                    <div class="flex items-center gap-2 mt-1 mb-2">
                        <font-awesome-icon :icon="['far', 'clock']" />
                        <h1 class="mr-3">10 AM</h1>
                        <font-awesome-icon :icon="['fas', 'location-dot']" />
                        <h1>Kathmandu Nepal</h1>
                    </div>
                    <p>
                        conse ctetur none. Donec sed odio dui. Nulla vitae elit
                        libero, a pharetra augue. Nullam id dolor id nibh
                    </p>
                </div>
            </div>
            <div class="latest-event group custom-shadow flex gap-5 p-5 basis-1/2 my-4">
                <div class="date-wrapper bg-red-500 pt-8 px-6 text-white font-bold text-xl text-center">
                    <div class="flex-col justify-end items-end">
                        <h2>29</h2>
                        <h2>May</h2>
                    </div>
                </div>
                <div class="right-wrapper">
                    <h1 class="event-title text-xl font-medium group-hover:text-red-500">
                        Political conferences
                    </h1>
                    <div class="flex items-center gap-2 mt-1 mb-2">
                        <font-awesome-icon :icon="['far', 'clock']" />
                        <h1 class="mr-3">10 AM</h1>
                        <font-awesome-icon :icon="['fas', 'location-dot']" />
                        <h1>Dang Nepal</h1>
                    </div>
                    <p>
                        conse ctetur none. Donec sed odio dui. Nulla vitae elit
                        libero, a pharetra augue. Nullam id dolor id nibh
                    </p>
                </div>
            </div>
            <div class="latest-event group custom-shadow flex gap-5 p-5 basis-1/2">
                <div class="date-wrapper bg-red-500 pt-8 px-6 text-white font-bold text-xl text-center">
                    <div class="flex-col justify-end items-end">
                        <h2>30</h2>
                        <h2>May</h2>
                    </div>
                </div>
                <div class="right-wrapper">
                    <h1 class="event-title text-xl font-medium group-hover:text-red-500">
                        Political conferences
                    </h1>
                    <div class="flex items-center gap-2 mt-1 mb-2">
                        <font-awesome-icon :icon="['far', 'clock']" />
                        <h1 class="mr-3">10 AM</h1>
                        <font-awesome-icon :icon="['fas', 'location-dot']" />
                        <h1>Rolpa Nepal</h1>
                    </div>
                    <p>
                        conse ctetur none. Donec sed odio dui. Nulla vitae elit
                        libero, a pharetra augue. Nullam id dolor id nibh
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>
