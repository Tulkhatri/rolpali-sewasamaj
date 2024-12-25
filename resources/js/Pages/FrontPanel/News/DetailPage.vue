<script setup>
import PageHeader from '../../../components/PageHeader.vue';

defineProps({
    news: Object,
});
</script>
<template>
   <Head title="समाचार"></Head>
   <PageHeader pageheader="समाचार विवरण" />
   <div class="flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5">
        <div class="right-sec basis-1/2">
            <!-- <h4 class="horizontal-line-ourvision">Our Vision</h4> -->
            <h1 class="mt-8 text-xl md:text-2xl">{{ news.title }} </h1>
          
            <p class="mt-5 text-justify whitespace-pre-line">{{ news.detail }}</p>
        </div>

        <div class="why-chose-us-image-wrapper basis-1/2">
            <!-- <img :src="'storage/'news.image" alt="" /> -->
            <img :src="news.image ? '/storage/' + news.image : '/noimage.png'" alt="" />
        </div>
    </div>
</template>