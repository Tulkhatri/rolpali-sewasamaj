<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <div class="page-header flex flex-col justify-center items-center p-10">
        <h1 class="text-3xl text-white mb-2">About Us</h1>
        <span>
            <Link href="/" class="text-white text-lg"
                >Home<font-awesome-icon
                    :icon="['fas', 'angle-right']"
                    class="text-white text-sm px-1"
            /></Link>
            <Link class="text-red-600">About Us</Link>
        </span>
    </div>
</template>
