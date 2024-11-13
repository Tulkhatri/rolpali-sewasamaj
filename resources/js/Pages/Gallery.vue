<script setup>
import Gallery from '../components/Gallery/Gallery.vue';
import PageHeader from '../components/PageHeader.vue';

</script>
<template>
     <!-- head imported globally inside app.js -->
    <Head title="Gallery"></Head>
    <PageHeader pageheader="Gallery"/>
   

 <Gallery
  :options="{
    Carousel: {
      infinite: false,
    },
  }"
>
<div class="flex items-center my-20 mx-5 lg:mx-56 gap-5">
  <a data-fancybox="gallery" href="https://lipsum.app/id/60/1600x1200">
    <img src="https://lipsum.app/id/60/200x150"/>
  </a>
</div>
</Gallery>

   
</template>
