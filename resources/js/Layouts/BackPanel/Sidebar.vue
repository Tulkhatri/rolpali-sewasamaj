<script setup>
import { usePage } from "@inertiajs/vue3";
import { isMenuOpen } from "../../components/BackPanel/toggleMenu";
const page = usePage();
console.log(page.component);

const menuItems = [
    {
        name: "Home Page",
        route: "admin.dashboard",
        icon: ["fas", "house"],
        component:'BackPanel/Dashboard/Dashboard'
    },
    {
        name: "Donation",
        route: "admin.donation",
        icon: ["fas", "hand-holding-dollar"],
        component:'BackPanel/Donation/Donation'
    },
    {
        name: "Aboutus",
        route: "admin.aboutus",
        icon: ['fas', 'address-card'],
        component:'BackPanel/Aboutus/Aboutus'
    },
    {
        name: "Our Team",
        route: "admin.ourteam",
        icon: ["fas", "users"],
        component:'BackPanel/OurTeam/OurTeam'
    },
    {
        name: "Slider",
        route: "admin.slider",
        icon: ["fab", "usps"],
        component:'BackPanel/Slider/Slider'
    },
    {
        name: "Event",
        route: "admin.event",
        icon: ['fas', 'calendar-check'],
        component:'BackPanel/Event/Event'
    },
    {
        name: "News",
        route: "admin.news",
        icon: ['fa-solid', 'fa-earth-asia'],
        component:'BackPanel/News/News'
    },
    {
        name: "Message",
        route: "admin.contact",
        icon: ['fas', 'envelope'],
        component:'BackPanel/Contact/Contact'
    },
];
</script>

<template>
    <div
        :class="[
            'shadow-[0px_0_0px_1px_#B9B9B9] bg-blue-300 transition-all duration-300 overflow-x-hidden',
            isMenuOpen ? 'w-[17%]' : 'w-[45px]',
        ]">
        <ul>
            <li
                v-for="item in menuItems"
                :key="item.name"
                :class="[
                    'pl-1 border-l-4 border-blue-300 hover:bg-slate-100 hover:border-white',
                    page.component === item.component ? 'bg-white border-l-4 border-blue-500': '',
                ]">
                <Link 
                    :href="route(item.route)" class="menu-wrapper p-2 flex justify-between items-center gap-2 w-full">
                    <div class="icon-title flex justify-start gap-1">
                        <font-awesome-icon :icon="item.icon" class="mr-2" />
                        <p class="whitespace-nowrap">{{ item.name }}</p>
                    </div>
                <font-awesome-icon :icon="['fas', 'angle-right']" class="text-sm"/>
                </Link> 
            </li>
        </ul>
    </div>
</template>
