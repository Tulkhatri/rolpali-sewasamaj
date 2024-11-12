<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref, onMounted, onBeforeUnmount } from "vue";

const page = usePage();
const isMobileView = ref(window.innerWidth < 1092); 
const isMenuOpen = ref(false); // Track menu open/close state

const menuItems = [
    { name: 'Home', route: route('home'), component: 'Home' },
    { name: 'About Us', route: route('about'), component: 'About' },
    { name: 'Donation', route: route('donation'), component: 'Donation' },
    { name: 'Gallery', route: route('gallery'), component: 'Gallery' },
    { name: 'Event', route: route('event'), component: 'Event' },
    { name: 'News', route: route('news'), component: 'News' },
    { name: 'Contact', route: route('contactus'), component: 'ContactUs' },
];

const checkScreenSize = () => {
  isMobileView.value = window.innerWidth < 1092;
  if (!isMobileView.value) isMenuOpen.value = false; // Close menu on larger screens
};

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value; // Toggle menu on click
};

// Method to handle menu item click
const handleMenuItemClick = () => {
  isMenuOpen.value = false; // Close the menu when a menu item is clicked
};

onMounted(() => {
  checkScreenSize();
  window.addEventListener('resize', checkScreenSize);
});

onBeforeUnmount(() => {
  window.removeEventListener('resize', checkScreenSize);
});
</script>
<template>
    <div class="top-social-media-section">
        <div class="bg-theme-light px-5 py-2 lg:px-56 flex justify-between">
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
        <div class="px-5 py-2 lg:px-56 flex justify-between items-center">
            <div class="image-wrapper flex items-center">
                <img
                    class="block h-20 w-auto m-auto"
                    src="../../assets/images/logo.jpg"
                    alt="Logo"
                />
                <span class="mx-2">Rolpali Sewa samaj Rolpa</span>
            </div>
            <div class="social-media-wrapper flex">
                <div class="hidden lg:flex justify-start items-center">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="mx-3 cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    /><span>rolpalisewasamaj@gmail.com</span>
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

    <header class="bg-theme-red lg:pr-56 lg:pl-52 sticky top-0 z-20">
        <nav class="flex justify-between items-center relative">
            <ul :class="['flex font-semibold text-white', isMobileView ? 'menu_responsive' : '', isMenuOpen ? 'open' : '']">
                <li v-for="item in menuItems" :key="item.name" 
                    :class="['px-3 py-2 hover:bg-red-400 hover:rounded-md transition-all duration-300 ease-in-out list_item', page.component === item.component ? 'active' : '']">
                    <Link :href="item.route" @click="handleMenuItemClick">{{ item.name }}</Link>
                </li>
            </ul>

            <div class="right-button flex justify-center items-center">
                <div class="custom-slider-top-button bg-white text-red-600 m-4 px-6 py-1.5 rounded-3xl text-nowrap">
                    <Link :href="route('about')">Donate Now</Link>
                </div>
                <div class="custom-slider-top-button bg-white text-red-600 m-4 px-6 py-1.5 rounded-3xl text-nowrap">
                    <Link :href="route('about')">Join Now</Link>
                </div>
                <font-awesome-icon 
                    :icon="isMenuOpen ? ['fas', 'xmark'] : ['fas', 'bars']" 
                    class="text-white text-xl hamburger_menu lg:hidden" 
                    @click="toggleMenu"/>
            </div>
        </nav>
    </header>
</template>
