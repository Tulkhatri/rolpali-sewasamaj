<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref, onMounted, onBeforeUnmount } from "vue";
import GoogleTranslate from "../components/LanguageTranslate/GoogleTranslate.vue";
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
            <p class="text-sm md:text-lg">Empowering communities and fostering growth for a brighter Rolpa.</p>
            <div class="social-media-wrapper whitespace-nowrap">
                <a href="https://www.facebook.com/profile.php?id=100089722701713" target="_blank" rel="noopener noreferrer">
                    <font-awesome-icon
                        :icon="['fab', 'facebook']"
                        class=" cursor-pointer text-blue-700"
                    />
                </a>
                <font-awesome-icon
                    :icon="['fab', 'linkedin']"
                    class="cursor-pointer text-blue-500 ml-5"
                />
            </div>
        </div>
    </div>
    <div class="top-social-media-section">
        <div class="px-5 py-2 lg:px-56 flex justify-between items-center">
            <Link :href="route('home')">
                <div class="image-wrapper flex items-center">
                    <img
                        class="block h-14 md:h-20 w-auto m-auto"
                        src="../../assets/images/logo.png"
                        alt="Logo"
                    />
                    <span class="mx-2 text-sm md:text-lg">Rolpali Sewa samaj</span>
                </div>
            </Link>
            <div class="social-media-wrapper flex">
                <div class="hidden lg:flex justify-start items-center">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="mx-3 cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    /><span>rolpalisewasamajrolpa@gmail.com</span>
                </div>
                <div class="flex justify-start items-center">
                    <font-awesome-icon
                        :icon="['fas', 'phone-volume']"
                        class="mx-3 text-sm cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    /><span>9848840050</span>
                </div>
            </div>
        </div>
    </div>

    <header class="bg-theme-red lg:pr-56 lg:pl-52 sticky top-0 z-20">
        <nav class="md:flex justify-between items-center relative">
            <ul :class="['flex font-semibold text-white', isMobileView ? 'menu_responsive' : '', isMenuOpen ? 'open' : '']">
                <li v-for="item in menuItems" :key="item.name" 
                    :class="['px-3 py-2 hover:bg-red-400 hover:rounded-md transition-all duration-300 ease-in-out list_item', page.component === item.component ? 'active' : '']">
                    <Link :href="item.route" @click="handleMenuItemClick">{{ item.name }}</Link>
                </li>
            </ul>

            <div class="right-button flex justify-between items-center">
                <div class="button-wrapper flex justify-between gap-1">
                    <div class="custom-slider-top-button bg-white text-red-600 m-4 px-6 py-1.5 rounded-3xl text-nowrap">
                        <Link :href="route('contactus')">Donate</Link>
                    </div>
                    <div class="custom-slider-top-button bg-white text-red-600 my-4 mr-4 px-6 py-1.5 rounded-3xl text-nowrap">
                        <Link :href="route('contactus')">Join Now</Link>
                    </div>
        <GoogleTranslate />

             </div>
                <font-awesome-icon 
                    :icon="isMenuOpen ? ['fas', 'xmark'] : ['fas', 'bars']" 
                    class="text-white text-xl hamburger_menu lg:hidden mr-5" 
                    @click="toggleMenu"/>
            </div>
        </nav>
    </header>
</template>
