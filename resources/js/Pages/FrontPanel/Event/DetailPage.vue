<script setup>
import PageHeader from '../../../components/PageHeader.vue';

defineProps({
    event: Object,
});
</script>
<template>
   <Head title="कार्यक्रम"></Head>
   <PageHeader pageheader="कार्यक्रम विवरण" />
   <div class="flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5">
        <div class="right-sec basis-1/2">
            <!-- <h4 class="horizontal-line-ourvision">Our Vision</h4> -->
            <h1 class="mt-8 text-xl md:text-2xl">{{ event.title }} </h1>
          
            <p class="mt-5 text-justify whitespace-pre-line">{{ event.detail }}</p>
        </div>

        <div class="why-chose-us-image-wrapper basis-1/2">
            <!-- <img :src="'storage/'event.image" alt="" /> -->
            <img :src="event.image ? '/storage/' + event.image : '/noimage.png'" alt="" />
        </div>
    </div>
</template>