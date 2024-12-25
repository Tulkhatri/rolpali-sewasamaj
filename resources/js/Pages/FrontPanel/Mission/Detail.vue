<script setup>
import PageHeader from '../../../components/PageHeader.vue';
defineProps({
    aboutus:Object,
});
</script>
<template>
   <Head title="मिशन विवरण"></Head>
   <PageHeader pageheader="मिशन विवरण" />
   <div class="flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5 lg:gap-20">
        <div class="right-sec basis-1/2">
            <!-- <h4 class="horizontal-line-ourvision">Our Vision</h4> -->
            <h1 class="mt-8 text-xl md:text-2xl">{{ aboutus.mission1_title }} </h1>
          
            <p class="mt-5 text-justify whitespace-pre-line">{{ aboutus.mission1_detail }}</p>
        </div>

        <div class="why-chose-us-image-wrapper basis-1/2">
            <!-- <img :src="'storage/'donation.image" alt="" /> -->
            <img class="h-80"  :src="aboutus.mission1_image ? '/storage/'+ aboutus.mission1_image : '/noimage.png'" alt="" />
        </div>
    </div>
   <div class="lg:mt-32 flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5 lg:gap-20">
    <div class="why-chose-us-image-wrapper basis-1/2">
            <!-- <img :src="'storage/'donation.image" alt="" /> -->
            <img class="h-80"  :src="aboutus.mission2_image ? '/storage/'+ aboutus.mission2_image : '/noimage.png'" alt="" />
        </div>
        <div class="right-sec basis-1/2">
            <!-- <h4 class="horizontal-line-ourvision">Our Vision</h4> -->
            <h1 class="mt-8 text-xl md:text-2xl">{{ aboutus.mission2_title }} </h1>
          
            <p class="mt-5 text-justify whitespace-pre-line">{{ aboutus.mission2_detail }}</p>
        </div>

       
    </div>
   <div class="flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5 lg:gap-20">
        <div class="right-sec basis-1/2">
            <!-- <h4 class="horizontal-line-ourvision">Our Vision</h4> -->
            <h1 class="mt-8 text-xl md:text-2xl">{{ aboutus.mission3_title }} </h1>
          
            <p class="mt-5 text-justify whitespace-pre-line">{{ aboutus.mission3_detail }}</p>
        </div>

        <div class="why-chose-us-image-wrapper basis-1/2">
            <!-- <img :src="'storage/'donation.image" alt="" /> -->
            <img class="h-80"  :src="aboutus.mission3_image ? '/storage/'+ aboutus.mission3_image : '/noimage.png'" alt="" />
        </div>
    </div>
</template>