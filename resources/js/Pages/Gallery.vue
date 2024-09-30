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
<div class="flex items-center my-20 mx-56 gap-5">
  <a data-fancybox="gallery" href="https://lipsum.app/id/60/1600x1200">
    <img src="https://lipsum.app/id/60/200x150"/>
  </a>
  <a data-fancybox="gallery" href="https://lipsum.app/id/61/1600x1200">
    <img src="https://lipsum.app/id/61/200x150"/>
  </a>
  <a data-fancybox="gallery" href="https://lipsum.app/id/62/1600x1200">
    <img src="https://lipsum.app/id/62/200x150"/>
  </a>
  <a data-fancybox="gallery" href="https://lipsum.app/id/63/1600x1200">
    <img src="https://lipsum.app/id/63/200x150"/>
  </a>
  <a data-fancybox="gallery" href="https://lipsum.app/id/64/1600x1200">
    <img src="https://lipsum.app/id/64/200x150"/>
  </a>
</div>
</Gallery>

   
</template>
