<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="top-social-media-section">
        <div class="bg-theme-light px-56 py-2 flex justify-between">
            <p>Welcome to Rolpali sewasamaj</p>
            <div class="social-media-wrapper">
                <font-awesome-icon
                    :icon="['fab', 'facebook']"
                    class="mx-3 cursor-pointer text-blue-700"
                />
                <font-awesome-icon
                    :icon="['fab', 'linkedin']"
                    class="mx-3 cursor-pointer text-blue-500"
                />
            </div>
        </div>
    </div>
    <div class="top-social-media-section">
        <div class="px-56 py-2 flex justify-between items-center">
            <div class="image-wrapper flex items-center">
                <img
                    class="block h-10 w-auto m-auto"
                    src="../../assets/images/logo.jpg"
                    alt="Logo"
                />
                <span class="mx-2">Rolpali Sewa samaj Rolpa</span>
            </div>
            <div class="social-media-wrapper flex">
                <div class="flex justify-start items-center">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="mx-3 cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    /><span>tulb.khatri@gmail.com</span>
                </div>
                <div class="flex justify-start items-center">
                    <font-awesome-icon
                        :icon="['fas', 'phone-volume']"
                        class="mx-3 cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    /><span>9847862779</span>
                </div>
            </div>
        </div>
    </div>

    <header class="bg-theme-red pr-56 pl-52 sticky top-0 z-10">
        <nav class="flex justify-between items-center">
            <ul class="flex font-semibold text-white">
                <li class="px-3 py-2 hover:bg-red-400 hover:px-3 hover:rounded-sm">
                    <Link :href="route('home')">Home</Link>
                </li>
                <li class="px-3 py-2 hover:bg-red-400 hover:px-3 hover:rounded-sm">
                    <Link :href="route('about')">About Us</Link>
                </li>
                <li class="px-3 py-2 hover:bg-red-400 hover:px-3 hover:rounded-sm">
                    <Link :href="route('donation')">Donation</Link>
                </li>
                <li class="px-3 py-2 hover:bg-red-400 hover:px-3 hover:rounded-sm">
                    <Link :href="route('gallery')">Gallery</Link>
                </li>
                <li class="px-3 py-2 hover:bg-red-400 hover:px-3 hover:rounded-sm">
                    <Link :href="route('event')">Event</Link>
                </li>
                <li class="px-3 py-2 hover:bg-red-400 hover:px-3 hover:rounded-sm">
                    <Link :href="route('news')">News</Link>
                </li>
                <li class="px-3 py-2 hover:bg-red-400 hover:px-3 hover:rounded-sm">
                    <Link :href="route('contactus')">Contact</Link>
                </li>
            </ul>
            <div class="right-button flex">
                <div class="bg-white text-red-600 m-4 px-6 py-1.5 rounded-3xl hover:bg-red-700 hover:text-white">
                    <Link :href="route('about')">Donate Now</Link>
                </div>
                <div class="bg-white text-red-600 m-4 px-6 py-1.5 rounded-3xl hover:bg-red-700 hover:text-white">
                    <Link :href="route('about')">Join Now</Link>
                </div>
            </div>
        </nav>
    </header>
</template>
