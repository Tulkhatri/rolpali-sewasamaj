<script setup>
import PageHeader from "../components/PageHeader.vue";
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="News"></Head>
    <PageHeader pageheader="Contact Us" />
    <div class="upcomming-event bg-slate-100 py-20">
        <div class="mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Contact Us
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">
                Contact us.............................
            </p>
        </div>
        <div class="upcomming-event-row mt-10 px-56">
            <div class="row-wrapper mt-5 flex justify-between items-center gap-5">
                <div class="basis-1/2">
                    <input
                        type="text"
                        placeholder="Name"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    />
                </div>
                <div class="basis-1/2">
                    <input
                        type="email"
                        placeholder="Email"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    />
                </div>
            </div>
            <div class="row-wrapper mt-5 flex justify-between items-center gap-5">
                <div class="basis-1/2">
                    <input
                        type="text"
                        placeholder="Phone"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    />
                </div>
                <div class="basis-1/2">
                    <input
                        type="text"
                        placeholder="Address"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    />
                </div>
            </div>

            <div class="my-4">
                <textarea
                    name=""
                    id=""
                    placeholder="Message"
                  class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                ></textarea>
            </div>
            <button
                class="bg-theme-red p-2 rounded-md text-white hover:bg-slate-50 hover:text-red-500 w-full"
            >
                Send Message
            </button>
        </div>

        <div class="contact-section flex justify-start items-center gap-5 mx-56 my-10">
            <div class="left-section custom-shadow basis-1/3 p-5">
                <div class="icon-text-wrapper flex justify-start items-center gap-5">
                    <font-awesome-icon :icon="['fas', 'location-dot']" 
                      class="cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    />
                    <div class="text-wrapper">
                        <h1>Rolpa</h1>
                    </div>
                </div>
                <div class="icon-text-wrapper flex justify-start items-center gap-5 my-10">
                    <font-awesome-icon
                        :icon="['fas', 'phone-volume']"
                        class="cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    />
                    <div class="text-wrapper">
                        <h1>9847862779</h1>
                        <h1>9847862779</h1>
                    </div>
                </div>
                <div class="icon-text-wrapper flex justify-start items-center gap-5">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    />
                    <div class="text-wrapper">
                        <h1>tulb.khatri@gmail.com</h1>
                        <h1>tulb.khatri@gmail.com</h1>
                    </div>
                </div>
            </div>
            <div class="map-section basis-2/3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224774.71527278595!2d82.48828492260624!3d28.325426185879838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3997dce8b5f225f9%3A0x1f7b90a4f99eecf1!2sRolpa!5e0!3m2!1sen!2snp!4v1727746903753!5m2!1sen!2snp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</template>
