<script setup>
import PageHeader from "../components/PageHeader.vue";
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    name: null,
    phone: null,
    email: null,
    address: null,
    message: null,
  
});
const submit = () => {
    const res = form.post(route("contact.save"), {
        onError: () => {
            showNotification("", "error");
        },
        onSuccess: () => {
            form.reset();
            showNotification("", "success");
        },
    });
};
const showNotification = (message, type) => {
    var notification = document.getElementById("customNotification");

    // Show the notification
    notification.style.display = "block";

    // Hide the notification after 3 seconds (adjust as needed)
    setTimeout(function () {
        notification.style.display = "none";
    }, 3000);
};
</script>

<template>
    <!-- head imported globally inside app.js -->
    <Head title="सम्पर्क गर्नुहोस"></Head>
    <PageHeader pageheader="सम्पर्क गर्नुहोस" />
    <div class="upcomming-event bg-slate-100 py-20">

        <div
                id="customNotification"
                class="custom-notification-front"
                :class="{
                    '!bg-green-500': $page.props.flash.type == 'Success',
                    '!bg-red-500': $page.props.flash.type == 'error',
                }"
            >
                <div>
                    <font-awesome-icon :icon="['fas', $page.props.flash.type === 'error' ? 'x' : 'check']" class="mr-1"/>
                    {{ $page.props.flash.message }}
                </div>
            </div>

        <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                सम्पर्क गर्नुहोस
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">
                रोल्पाली सेवा समाजसँग सम्पर्कमा रहनुहोस - हामी हाम्रो समुदायलाई मद्दत गर्न, समर्थन गर्न र जडान गर्न यहाँ छौं।
            </p>
        </div>
        <form @submit.prevent="submit">
            <div class="upcomming-event-row mt-10 mx-5 lg:px-56">
                <div class="row-wrapper mt-5 md:flex justify-between items-center gap-5">
                    <div class="basis-1/2">
                        <input
                            type="text"
                             v-model="form.name"
                             :message="form.errors.name"
                            placeholder="Name"
                            class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                        />
                        <p class="text-red-500 ml-1">{{ form.errors.name }}</p>
                    </div>
                    <div class="basis-1/2 mt-5 md:mt-0">
                        <input
                            v-model="form.email"
                             :message="form.errors.email"
                            type="email"
                            placeholder="Email"
                            class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                        />
                    </div>
                </div>
                <div class="row-wrapper mt-5 md:flex justify-between items-center gap-5">
                    <div class="basis-1/2">
                        <input
                            type="text"
                             v-model="form.phone"
                             :message="form.errors.phone"
                            placeholder="Phone"
                            class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                        />
                    </div>
                    <div class="basis-1/2">
                        <input
                            type="text"
                             v-model="form.address"
                             :message="form.errors.address"
                            placeholder="Address"
                            class="mt-5 md:mt-0 rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                        />
                    </div>
                </div>

                <div class="my-4">
                    <textarea
                        v-model="form.message"
                        placeholder="Message"
                    class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    ></textarea>
                    <p class="text-red-500 ml-1">{{ form.errors.message }}</p>
                </div>
                <button :disabled="form.processing"
                    class="bg-theme-red p-2 rounded-md text-white hover:bg-slate-50 hover:text-red-500"
                >
                <font-awesome-icon :icon="['fas', 'paper-plane']" />
                सन्देश पठाउनुहोस
                </button>
            </div>
        </form>

        <div class="contact-section flex flex-col lg:flex-row justify-start items-center gap-5 mx-5 lg:mx-56 my-10">
            <div class="left-section custom-shadow w-full lg:basis-1/3 p-5">
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
                        <h1>9848840050</h1>
                    </div>
                </div>
                <div class="icon-text-wrapper flex justify-start items-center gap-5">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    />
                    <div class="text-wrapper">
                        <h1>rolpalisewasamajrolpa@gmail.com</h1>
                    </div>
                </div>
            </div>
            <div class="map-section w-full lg:basis-2/3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224774.71527278595!2d82.48828492260624!3d28.325426185879838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3997dce8b5f225f9%3A0x1f7b90a4f99eecf1!2sRolpa!5e0!3m2!1sen!2snp!4v1727746903753!5m2!1sen!2snp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</template>
