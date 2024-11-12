<script setup>
import PageHeader from "../components/PageHeader.vue";
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="About"></Head>
    <PageHeader pageheader="About Us" />
    <div class="flex flex-col lg:flex-row items-center my-20 mx-5 lg:mx-56 gap-5">
        <div class="right-sec basis-1/2">
            <h4 class="horizontal-line-ourvision">Our Vision</h4>
            <h1 class="mt-8 text-2xl">Empowering Disabled and Underprivileged </h1>
            <h1 class="text-2xl">Individuals in Rolpa and Across Nepal.</h1>
            <p class="mt-8 text-justify">
                Our vision is to create a future where every disabled and underprivileged individual in Rolpa, as well as throughout Nepal, has the support and resources to live with dignity and reach their potential. We are committed to breaking down social, physical, and economic barriers preventing them from leading self-sufficient lives. By providing essential assistance and empowering communities, we aim to create opportunities for growth, inclusion, and equality.
            </p>
            <p class="mt-5 text-justify">
                Through compassion, collaboration, and a deep dedication to social justice, we strive to make a lasting, transformative impact on the lives of those in need, starting with Rolpa and reaching across all of Nepal.
            </p>
        </div>

        <div class="why-chose-us-image-wrapper basis-1/2">
            <img src="../../assets/images/rolpa.jpg" alt="" />
        </div>
    </div>

    <div class="mission-area bg-gray-100 py-20">
        <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Meet Our Team
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">Compassionate, collaborative, dedicated to community support.</p>
        </div>
        <div class="mission-row mt-10 px-5 flex flex-col gap-5 lg:px-56 lg:flex-row items-center flex-wrap">
            <div class="mission-container w-full lg:basis-[22%] relative group">
                <div
                    class="team-hover h-72 w-full py-10 px-5 bg-red-600 text-center text-white"
                >
                    <h1 class="text-lg font-medium">Dila Ram Oli</h1>
                    <h1 class="">Chairperson</h1>
                    <p class="my-3 text-sm">
                        Team Detail Team DetailTeam DetailTeam DetailTeam
                        DetailTeam DetailTeam DetailTeam Detail
                    </p>
                    <div class="social-media-wrapper flex gap-1 justify-center">
                        <a href="https://www.facebook.com/dilaram.oli.1" target="_blank">
                            <font-awesome-icon
                                :icon="['fab', 'facebook']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </a>
                        <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'linkedin']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </Link>
                    </div>
                </div>

                <div
                    class="team-wrapper absolute left-0 top-0 scale-100 group-hover:scale-0 w-full transition-all duration-500"
                >
                    <div class="image-wrapper">
                        <img
                            class="h-52"
                            src="../../assets/images/team/dilaram.png"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-4 px-4 bg-red-600 text-center text-white"
                    >
                        <h1 class="text-xl font-medium">Dila Ram Oli</h1>
                        <p class="mt-1">Chairperson</p>
                    </div>
                </div>
            </div>

            ..
        </div>
    </div>
</template>
