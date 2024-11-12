<script setup></script>
<template>
    <div class="bg-slate-800">
        <div class="flex flex-col lg:flex-row mx-5 lg:mx-56 py-20 gap-5">
            <div class="footer-address-wrapper basis-1/4 text-white">
                <h2 class="font-bold text-lg">Contact Info</h2>
                <p class="my-5">
                    Rolpa Rolpa Rolpa Rolpa Rolpa Rolpa Rolpa Rolpa Rolpa
                </p>
                <div class="icon-text">
                    <font-awesome-icon
                        :icon="['fas', 'location-dot']"
                        class="mr-3"
                    /><span>Ghorahi-14,Dang</span>
                </div>
                <div class="icon-text my-4">
                    <font-awesome-icon :icon="['fas', 'phone']" class="mr-3" />
                    <span>9847862779</span>
                </div>
                <div class="icon-text">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="mr-3"
                    />
                    <span>tulb.khatri@gmail.com</span>
                </div>
            </div>

            <div class="footer-address-wrapper basis-1/4 text-white">
                <h2 class="font-bold text-lg">Quick Link</h2>
                <ul class="link-wrapper my-5">
                    <li class="my-4">
                        <a href="" class="hover:underline hover:text-blue-400"
                            >Hamro sewa samaj Rolpa</a
                        >
                    </li>
                    <li class="my-4">
                        <a href="" class="hover:underline hover:text-blue-400"
                            >Rolpali sewa samaj UAE</a
                        >
                    </li>
                    <li class="my-4">
                        <a href="" class="hover:underline hover:text-blue-400"
                            >Rolpali sewa samaj India</a
                        >
                    </li>
                    <li class="my-4">
                        <a href="" class="hover:underline hover:text-blue-400"
                            >Rolpali sewa samaj Dang</a
                        >
                    </li>
                    <li class="my-4">
                        <a href="" class="hover:underline hover:text-blue-400"
                            >Rolpali sewa samaj Kathmandu</a
                        >
                    </li>
                </ul>
            </div>

            <div class="footer-address-wrapper basis-1/4 text-white">
                <h2 class="font-bold text-lg">Popular Post</h2>
                <a href="" class="icon-text mt-5 flex items-center gap-5 hover:text-blue-300">
                    <div class="image-wrapper basis-1/2">
                        <img
                            src="../../assets/images/swiper/slider1.jpeg"
                            alt=""
                            class="aspect-square max-h-16"
                        />
                    </div>
                    <div class="text-wrapper">
                        <p>Your Small Business Web Design Solution.</p>
                        <h5 class="text-sm">May 16, 2024</h5>
                    </div>
                </a>
                <a href=""  class="icon-text mt-2 flex items-center gap-5 hover:text-blue-300">
                    <div class="image-wrapper basis-1/2">
                        <img
                            src="../../assets/images/swiper/slider1.jpeg"
                            alt=""
                            class="aspect-square max-h-16"
                        />
                    </div>
                    <div class="text-wrapper">
                        <p>Your Small Business Web Design Solution.</p>
                        <h5 class="text-sm">May 20, 2024</h5>
                    </div>
                </a>
                <a href=""  class="icon-text mt-2 flex items-center gap-5 hover:text-blue-300">
                    <div class="image-wrapper basis-1/2">
                        <img
                            src="../../assets/images/swiper/slider1.jpeg"
                            alt=""
                            class="aspect-square max-h-16"
                        />
                    </div>
                    <div class="text-wrapper">
                        <p>Your Small Business Web Design Solution.</p>
                        <h5 class="text-sm">May 30, 2024</h5>
                    </div>
                </a>
            </div>

            <div class="footer-address-wrapper basis-1/4">
                <h2 class="text-white font-bold text-lg">Contact Us</h2>

                <div class="mt-5">
                    <input
                        type="text"
                        placeholder="Name"
                        class="rounded-md p-1 w-full"
                    />
                </div>
                <div class="my-4">
                    <input
                        type="email"
                        placeholder="Email"
                        class="rounded-md p-1 w-full"
                    />
                </div>
                <div class="my-4">
                    <textarea
                        name=""
                        id=""
                        placeholder="Message"
                        class="rounded-md p-1 w-full"
                    ></textarea>
                </div>
                <button
                    class="bg-theme-red px-2 py-1 rounded-md p-1 text-white hover:bg-slate-50 hover:text-red-500 w-full"
                >
                    Contact Us
                </button>
            </div>
        </div>
    </div>
    <div class="bg-black px-5 lg:px-56 py-5 flex justify-between flex-col md:flex-row">
        <h1 class="text-white">
            @2024 Rolpali Sewasamaj Rolpa All Right Reserved.
        </h1>
        <h1 class="text-white">
            Designed and Developed by
            <a
                href="http://tulbahadurkhatri.com.np/"
                target="_blank"
                class="text-blue-400 font-bold ml-2 hover:underline"
                >Tul Bahadur Khatri</a
            >
        </h1>
    </div>
</template>
