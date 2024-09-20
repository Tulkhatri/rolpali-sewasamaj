<script setup>
import Swiper from '../components/Swiper.vue';
</script>
<template>
    <div class="top-social-media-section">
        <div class="bg-theme-light px-56 py-2 flex justify-between">
            <p>Welcome to Rolpali sewasamaj</p>
            <div class="social-media-wrapper">
                <font-awesome-icon :icon="['fab', 'facebook']"class="mx-3 cursor-pointer text-indigo-500"/>
                <font-awesome-icon :icon="['fab', 'linkedin']"class="mx-3 cursor-pointer text-indigo-500" />
               
            </div>
        </div>
    </div>
    <div class="top-social-media-section">
        <div class="px-56 py-2 flex justify-between items-center">
           <div class="image-wrapper flex items-center">
            <img class="block h-10 w-auto m-auto" src="../../assets/images/logo.jpg" alt="Logo" />
            <span class="mx-2">Rolpali Sewa samaj Rolpa</span>
           </div>
            <div class="social-media-wrapper flex">
                <div class="flex justify-start items-center">
                    <font-awesome-icon :icon="['far', 'envelope']"class="mx-3 cursor-pointer bg-theme-red text-white p-1.5 rounded-md"/><span>tulb.khatri@gmail.com</span>
                </div>
                <div class="flex justify-start items-center">
                    <font-awesome-icon :icon="['fas', 'phone-volume']"class="mx-3 cursor-pointer bg-theme-red text-white p-1.5 rounded-md"/><span>9847862779</span>
                </div>
            </div>
        </div>
    </div>
    <div>
        <header class="bg-theme-red px-56 sticky top-0 z-10">
            <nav class="flex justify-between items-center">
                <ul class="flex gap-4 font-semibold text-white">
                    <li class="space-x-6">
                        <!-- Link Directly use it is import globally inside app.js -->
                         <!-- required <script setup></script> -->
                        <Link :href="route('home')">Home</Link>
                    </li>
                    <li class="space-x-6">
                        <Link :href="route('about')">Service</Link>
                    </li>
                    <li class="space-x-6">
                        <Link :href="route('about')">Gallery</Link>
                    </li>
                    <li class="space-x-6">
                        <Link :href="route('about')">Event</Link>
                    </li>
                    <li class="space-x-6">
                        <Link :href="route('about')">Blog</Link>
                    </li>
                    <li class="space-x-6">
                        <Link :href="route('about')">Contact</Link>
                    </li>
                </ul>
                <button class="bg-white text-red-600 m-4 px-6 py-1.5 rounded-3xl">Donate Now</button>
            </nav>
        </header>
        <Swiper/>
        <main>
            <slot />
        </main>
    </div>
</template>
