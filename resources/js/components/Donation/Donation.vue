<script setup></script>
<template>
   <div class="mission-area bg-gray-100 py-20">
        <div class="mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Donation
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">Donation details..........</p>
        </div>
        <div class="mission-row mt-10 px-56 flex items-center flex-wrap gap-5">
            <div class="mission-container basis-[31%] relative group">
                <div class="">
                    <div class="image-wrapper">
                        <img src="../../../assets/images/swiper/slider3.jpeg" alt="" class="h-48"/>
                    </div>
                    <div class="title-detail-wrapper py-6 px-4 bg-white">
                        <h1 class="text-xl font-medium">Donation1</h1>
                        <p class="mt-2">Text something here....................</p>
                        <div class="w-full h-[5px] bg-red-300 rounded-3xl my-1">
                            <div class="w-1/2 h-[5px] bg-red-500 rounded-3xl"></div>
                        </div>
                        <p>Rs. 15,000 of Rs. 1,02,000 collected</p>
                    </div>
                </div>

                 <div class="w-full h-48 py-20 px-5 bg-[rgba(226,77,77,0.71)] text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">More</Link>
                </div>
        </div>

        <div class="mission-container basis-[31%] relative group">
                <div class="">
                    <div class="image-wrapper">
                        <img src="../../../assets/images/swiper/slider3.jpeg" alt="" class="h-48"/>
                    </div>
                    <div class="title-detail-wrapper py-6 px-4 bg-white">
                        <h1 class="text-xl font-medium">Donation2</h1>
                        <p class="mt-2">Text something here....................</p>
                        <div class="w-full h-[5px] bg-red-300 rounded-3xl my-1">
                            <div class="w-1/2 h-[5px] bg-red-500 rounded-3xl"></div>
                        </div>
                        <p>Rs. 15,000 of Rs. 1,02,000 collected</p>
                    </div>
                </div>

                 <div class="w-full h-48 py-20 px-5 bg-[rgba(226,77,77,0.71)] text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">More</Link>
                </div>
        </div>

        <div class="mission-container basis-[31%] relative group">
                <div class="">
                    <div class="image-wrapper">
                        <img src="../../../assets/images/swiper/slider3.jpeg" alt="" class="h-48"/>
                    </div>
                    <div class="title-detail-wrapper py-6 px-4 bg-white">
                        <h1 class="text-xl font-medium">Donation3</h1>
                        <p class="mt-2">Text something here....................</p>
                        <div class="w-full h-[5px] bg-red-300 rounded-3xl my-1">
                            <div class="w-1/2 h-[5px] bg-red-500 rounded-3xl"></div>
                        </div>
                        <p>Rs. 15,000 of Rs. 1,02,000 collected</p>
                    </div>
                </div>

                 <div class="w-full h-48 py-20 px-5 bg-[rgba(226,77,77,0.71)] text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">More</Link>
                </div>
        </div>
        </div>
    </div>
</template>
