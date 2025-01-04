<script setup>
import PageHeader from "../../components/PageHeader.vue";

defineProps({
    aboutus: Object,
    ourteam: Object, // Updated to receive grouped data as an object with branch names as keys
});
</script>

<template>
    <!-- Head imported globally inside app.js -->
    <Head title="हाम्रो बारेमा"></Head>
    <PageHeader pageheader="हाम्रो बारेमा" />
    <div class="flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5">
        <div class="right-sec basis-1/2">
            <h4 class="horizontal-line-ourvision">हाम्रो भिजन</h4>
            <h1 class="mt-8 text-xl md:text-2xl">{{ aboutus.vision_title }} </h1>
            <p class="mt-8 text-justify">
                {{ aboutus.vision_detail }}
            </p>
        </div>

        <div class="why-chose-us-image-wrapper basis-1/2">
            <img
                class="h-80"
                :src="aboutus.vision_image ? '/storage/' + aboutus.vision_image : '/noimage.png'"
                alt=""
            />
        </div>
    </div>

    <div class="mission-area bg-gray-100 py-20">
        <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                हाम्रो टोली
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../../assets/images/icon/icon.png" alt="" />
            </div>
            <p class="text-center mt-2">दयालु, सहयोगी, समुदाय समर्थनमा समर्पित</p>
        </div>

        <!-- Grouped team members by branch -->
        <div v-for="(members, branchName) in ourteam" :key="branchName" class="branch-section mt-10">
            <h2 class="branch-title text-2xl font-medium text-center mb-8">
                {{ branchName }}
            </h2>
            <div class="mission-row px-5 flex flex-col gap-5 lg:px-56 lg:flex-row items-center flex-wrap">
                <div
                    v-for="(item, index) in members"
                    :key="item.name"
                    class="mission-container w-full lg:basis-[22%] relative group"
                >
                    <div
                        class="team-hover h-96 lg:h-80 w-full py-10 px-5 bg-red-600 text-center text-white"
                    >
                        <h1 class="text-lg font-medium">{{ item.name }}</h1>
                        <h1 class="">{{ item.designation }}</h1>
                        <p class="my-3 text-sm">
                            {{ item.detail }}
                        </p>
                        <div class="social-media-wrapper flex gap-1 justify-center">
                            <a v-if="item.facebook" :href="item.facebook" target="_blank">
                                <font-awesome-icon
                                    :icon="['fab', 'facebook']"
                                    class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                                />
                            </a>
                            <a v-if="item.linkedin" :href="item.linkedin" target="_blank">
                                <font-awesome-icon
                                    :icon="['fab', 'linkedin']"
                                    class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                                />
                            </a>
                        </div>
                    </div>

                    <div
                        class="team-wrapper absolute left-0 top-0 scale-100 group-hover:scale-0 w-full transition-all duration-500"
                    >
                        <div class="image-wrapper">
                            <img
                                class="h-80 lg:h-60"
                                :src="item.image ? '/storage/' + item.image : '/noimage.png'"
                                alt=""
                            />
                        </div>
                        <div
                            class="title-detail-wrapper py-4 px-4 bg-red-600 text-center text-white"
                        >
                            <h1 class="text-xl font-medium">{{ item.name }}</h1>
                            <p class="mt-1">{{ item.designation }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
