<script setup>
import PageHeader from '../../../components/PageHeader.vue';
defineProps({
    donation: Object,
});
</script>
<template>
   <Head title="Donation"></Head>
   <PageHeader pageheader="Donation Details" />
   <div class="flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5">
        <div class="right-sec basis-1/2">
            <!-- <h4 class="horizontal-line-ourvision">Our Vision</h4> -->
            <h1 class="mt-8 text-xl md:text-2xl">{{ donation.title }} </h1>
          
            <p class="mt-5 text-justify whitespace-pre-line">{{ donation.detail }}</p>
        </div>

        <div class="why-chose-us-image-wrapper basis-1/2">
            <!-- <img :src="'storage/'donation.image" alt="" /> -->
            <img :src="donation.image ? '/storage/' + donation.image : '/noimage.png'" alt="" />
        </div>
    </div>
</template>