<script setup>
import PageHeader from '../../../components/PageHeader.vue';
defineProps({
    aboutus:Object,
});
</script>
<template>
   <Head title="होमपेज"></Head>
   <PageHeader pageheader="बिस्तृत विवरण" />
   <div class="flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5 lg:gap-14">
    <div class="why-chose-us-image-wrapper basis-1/2">
            <!-- <img :src="'storage/'donation.image" alt="" /> -->
            <img class="h-96"  :src="aboutus.chairman_image ? '/storage/'+ aboutus.chairman_image : '/noimage.png'" alt="" />
        </div>
        <div class="right-sec basis-1/2">
            <!-- <h4 class="horizontal-line-ourvision">Our Vision</h4> -->
            <!-- <h1 class="mt-8 text-xl md:text-2xl">{{ aboutus.mission2_title }} </h1> -->
          
            <p class="mt-5 text-justify whitespace-pre-line">{{ aboutus.chairman_message }}</p>
        </div>

       
    </div>
   <div class="lg:mt-32 flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5 lg:gap-14">
        <div class="right-sec basis-1/2">
            <!-- <h4 class="horizontal-line-ourvision">Our Vision</h4> -->
            <h1 class="mt-8 text-xl md:text-2xl">{{ aboutus.aboutus_title }} </h1>
          
            <p class="mt-5 text-justify whitespace-pre-line">{{ aboutus.aboutus_detail }}</p>
        </div>

        <div class="why-chose-us-image-wrapper basis-1/2">
            <!-- <img :src="'storage/'donation.image" alt="" /> -->
            <img class="h-96"  :src="aboutus.aboutus_image ? '/storage/'+ aboutus.aboutus_image : '/noimage.png'" alt="" />
        </div>
    </div>
</template>