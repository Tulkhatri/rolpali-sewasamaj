<script setup>
import Footer from "./Footer.vue";
import Header from "./Header.vue";
import Sidebar from "./Sidebar.vue";
</script>
<template>
    <Header />
    <main class="flex">
        <Sidebar />
        <slot />
    </main>
    <Footer />
</template>
