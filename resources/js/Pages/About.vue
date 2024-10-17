<script setup>
import PageHeader from "../components/PageHeader.vue";
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="About"></Head>
    <PageHeader pageheader="About Us" />
    <div class="flex items-center my-20 mx-56 gap-5">
        <div class="right-sec basis-1/2">
            <h4 class="horizontal-line-ourvision">Our Vision</h4>
            <h1 class="mt-8 text-3xl">Leadership is the trusted</h1>
            <h1 class="text-3xl">& powerful political team.</h1>
            <p class="mt-8 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing sed do
                eiushhgmose tempor incididun ut labore eth dolore magna aliqua.
                Ut enim ad mini ass veniam, arquis nostrud exercitation uj
                laboris nisi ut aliquip commodose consequat. Duis aute irure
                dolor in reprehenderit in volupj velit esse cillu dolore eu
                fugiat nulla pariatur. Excepteur
            </p>
            <p class="mt-5 text-justify">
                Voluptatem ac doloremque laudantium, totam rem aperiam, eaque
                ipsae quae ab illo inventore veritatis et qu architector beatae
                vitae dicta suntes explicabo. Nemo enim ipsam voluptatem
            </p>
        </div>

        <div class="why-chose-us-image-wrapper basis-1/2">
            <img src="../../assets/images/swiper/slider2.jpg" alt="" />
        </div>
    </div>

    <div class="mission-area bg-gray-100 py-20">
        <div class="mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Meet Our Team
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">Team short description..........</p>
        </div>
        <div class="mission-row mt-10 px-56 flex items-center flex-wrap gap-5">
            <div class="mission-container basis-[22%] relative group">
                <div
                    class="team-hover h-72 w-full py-10 px-5 bg-red-600 text-center text-white"
                >
                    <h1 class="text-lg font-medium">Tul Bahadur Khatri</h1>
                    <h1 class="">Software Developer</h1>
                    <p class="my-3 text-sm">
                        Team Detail Team DetailTeam DetailTeam DetailTeam
                        DetailTeam DetailTeam DetailTeam Detail
                    </p>
                    <div class="social-media-wrapper flex gap-1 justify-center">
                        <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'facebook']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </Link>
                        <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'linkedin']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </Link>
                    </div>
                </div>

                <div
                    class="team-wrapper absolute left-0 top-0 scale-100 group-hover:scale-0 transition-all duration-500"
                >
                    <div class="image-wrapper">
                        <img
                            class="h-52"
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-4 px-4 bg-red-600 text-center text-white"
                    >
                        <h1 class="text-xl font-medium">Team Name</h1>
                        <p class="mt-1">Team Designation</p>
                    </div>
                </div>
            </div>

            <div class="mission-container basis-[22%] relative group">
                <div
                    class="team-hover h-72 w-full py-10 px-5 bg-red-600 text-center text-white"
                >
                    <h1 class="text-lg font-medium">Tul Bahadur Khatri</h1>
                    <h1 class="">Software Developer</h1>
                    <p class="my-3 text-sm">
                        Team Detail Team DetailTeam DetailTeam DetailTeam
                        DetailTeam DetailTeam DetailTeam Detail
                    </p>
                    <div class="social-media-wrapper flex gap-1 justify-center">
                        <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'facebook']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </Link>
                        <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'linkedin']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </Link>
                    </div>
                </div>

                <div
                    class="team-wrapper absolute left-0 top-0 scale-100 group-hover:scale-0 transition-all duration-500"
                >
                    <div class="image-wrapper">
                        <img
                            class="h-52"
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-4 px-4 bg-red-600 text-center text-white"
                    >
                        <h1 class="text-xl font-medium">Team Name</h1>
                        <p class="mt-1">Team Designation</p>
                    </div>
                </div>
            </div>

            <div class="mission-container basis-[22%] relative group">
                <div
                    class="team-hover h-72 w-full py-10 px-5 bg-red-600 text-center text-white"
                >
                    <h1 class="text-lg font-medium">Tul Bahadur Khatri</h1>
                    <h1 class="">Software Developer</h1>
                    <p class="my-3 text-sm">
                        Team Detail Team DetailTeam DetailTeam DetailTeam
                        DetailTeam DetailTeam DetailTeam Detail
                    </p>
                    <div class="social-media-wrapper flex gap-1 justify-center">
                        <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'facebook']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </Link>
                        <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'linkedin']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </Link>
                    </div>
                </div>

                <div
                    class="team-wrapper absolute left-0 top-0 scale-100 group-hover:scale-0 transition-all duration-500"
                >
                    <div class="image-wrapper">
                        <img
                            class="h-52"
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-4 px-4 bg-red-600 text-center text-white"
                    >
                        <h1 class="text-xl font-medium">Team Name</h1>
                        <p class="mt-1">Team Designation</p>
                    </div>
                </div>
            </div>
            <div class="mission-container basis-[22%] relative group">
                <div
                    class="team-hover h-72 w-full py-10 px-5 bg-red-600 text-center text-white"
                >
                    <h1 class="text-lg font-medium">Tul Bahadur Khatri</h1>
                    <h1 class="">Software Developer</h1>
                    <p class="my-3 text-sm">
                        Team Detail Team DetailTeam DetailTeam DetailTeam
                        DetailTeam DetailTeam DetailTeam Detail
                    </p>
                    <div class="social-media-wrapper flex gap-1 justify-center">
                        <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'facebook']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </Link>
                        <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'linkedin']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-red-600"
                            />
                        </Link>
                    </div>
                </div>

                <div
                    class="team-wrapper absolute left-0 top-0 scale-100 group-hover:scale-0 transition-all duration-500"
                >
                    <div class="image-wrapper">
                        <img
                            class="h-52"
                            src="../../assets/images/swiper/slider3.jpeg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-4 px-4 bg-red-600 text-center text-white"
                    >
                        <h1 class="text-xl font-medium">Team Name</h1>
                        <p class="mt-1">Team Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
