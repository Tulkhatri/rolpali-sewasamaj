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
];
</script>

<template>
    <div
        :class="[
            'shadow-[0px_0_0px_1px_#B9B9B9] h-[82.8vh] bg-blue-300 transition-all duration-300 overflow-hidden',
            isMenuOpen ? 'w-[15%]' : 'w-[58px]',
        ]">
        <ul>
            <li
                v-for="item in menuItems"
                :key="item.name"
                :class="[
                    'px-4 hover:bg-slate-100',
                    page.component === item.component ? 'bg-white' : '',
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
