<script setup>
defineProps({
    donation: Object,
});
</script>
<template>
   <div class="mission-area bg-gray-100 py-20">
    <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
            सहयोग
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">थोरै दिनुहोस धेरै परिवर्तन गर्नुहोस। तपाईंको सहयोगले कसैको जीवन परिवर्तन गर्न सक्छ।</p>
        </div>
        <div class="mission-row mt-10 px-5 lg:px-56 flex flex-col lg:flex-row items-center flex-wrap gap-5">
            <div v-for="(item, index) in donation" :key="item.id" class="mission-container w-full lg:basis-[31%] relative group">
                <div class="">
                    <div class="image-wrapper">
                        <img :src="item.image ? '/storage/' + item.image : '/noimage.png'" alt="" class="h-48"/>
                    </div>
                    <div class="title-detail-wrapper py-6 px-4 bg-white">
                        <h1 class="text-xl font-medium">{{ item.title.length>30 ? item.title.substring(0,30) + '...': item.title }}</h1>
                        <p class="mt-2">{{ item.detail.length > 60 ? item.detail.substring(0, 60) + ' ...' : item.detail }}</p>
                       
                        <!-- <p class="mt-2">Donate today, and be the light in someone’s life.</p> -->
                        <!-- <div class="w-full h-[5px] bg-red-300 rounded-3xl my-1">
                            <div class="w-1/2 h-[5px] bg-red-500 rounded-3xl"></div>
                        </div> -->
                        <!-- <p>Rs. 15,000 of Rs. 1,02,000 collected</p> -->

                    </div>
                </div>

                 <div class="w-full h-48 py-20 px-5 bg-[rgba(226,77,77,0.71)] text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                        <Link :href="route('donation.detail',item.slug)" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-red-600 hover:transition-all duration-300 ease-in-out">थप पढ्नुहोस</Link>
                </div>
        </div>
    
        </div>
    </div>
</template>
