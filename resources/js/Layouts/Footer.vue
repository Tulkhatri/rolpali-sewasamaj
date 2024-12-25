<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    name: null,
    email: null,
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
    <div class="bg-slate-800">
        <div class="flex flex-col lg:flex-row mx-5 lg:mx-56 py-10 md:py-20 gap-5">
            <div class="footer-address-wrapper basis-1/3 text-white">
                <h2 class="font-bold text-lg">सम्पर्क</h2>
                <p class="my-5">
                    रोल्पा र नेपालभरका विपन्नता व्यक्तिहरूलाई सशक्तिकरण गर्दै।
                </p>
                <div class="icon-text">
                    <font-awesome-icon
                        :icon="['fas', 'location-dot']"
                        class="mr-3"
                    /><span>घोराही–१४, दाङ</span>
                </div>
                <div class="icon-text my-4">
                    <font-awesome-icon :icon="['fas', 'phone']" class="mr-3" />
                    <span>9848840050</span>
                </div>
                <div class="icon-text">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="mr-3"
                    />
                    <span>rolpalisewasamajrolpa@gmail.com</span>
                </div>
            </div>

            <div class="footer-address-wrapper basis-1/3 text-white">
                <h2 class="font-bold text-lg">उपयोगी लिङ्क</h2>
                <ul class="link-wrapper my-5">
                    <li class="my-4">
                        <a href="https://www.facebook.com/profile.php?id=100089722701713" class="hover:underline hover:text-blue-400"
                        target= "_blank">रोल्पाली सेवा समाज रोल्पा</a
                        >
                    </li>
                    <li class="my-4">
                        <a href="https://www.facebook.com/RolpainUAE" class="hover:underline hover:text-blue-400"
                        target= "_blank">रोल्पाली सेवा समाज UAE</a
                        >
                    </li>
                    <li class="my-4">
                        <a href="https://www.facebook.com/profile.php?id=61557994860297" class="hover:underline hover:text-blue-400"
                        target= "_blank">रोल्पाली सेवा समाज पोर्चुगल</a
                        >
                    </li>
                    <li class="my-4">
                        <a href="" class="hover:underline hover:text-blue-400"
                        target= "_blank">रोल्पाली सेवा समाज दाङ</a
                        >
                    </li>
                    <li class="my-4">
                        <a href="" class="hover:underline hover:text-blue-400"
                        target= "_blank">रोल्पाली सेवा समाज काठमाडौं</a
                        >
                    </li>
                </ul>
            </div>

            <!-- <div class="footer-address-wrapper basis-1/3 text-white">
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
                        <p>Post Title Dummy Data</p>
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
                        <p>Post Title Dummy Data</p>
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
                        <p>Post Title Dummy Data</p>
                        <h5 class="text-sm">May 30, 2024</h5>
                    </div>
                </a>
            </div> -->
            <div class="footer-address-wrapper basis-1/3">
                <form @submit.prevent="submit">
                <h2 class="text-white font-bold text-lg">सम्पर्क गर्नुहोस</h2>

                <div class="mt-5">
                    <input
                        type="text"
                         v-model="form.name"
                         :message="form.errors.name"
                        placeholder="Name"
                        class="rounded-md p-1 w-full"
                    />
                </div>
                <p class="text-red-500 ml-1">{{ form.errors.name }}</p>
                <div class="my-4">
                    <input
                        type="email"
                        v-model="form.email"
                        :message="form.errors.email"
                        placeholder="Email"
                        class="rounded-md p-1 w-full"
                    />
                </div>
                <div class="my-4">
                    <textarea
                       v-model="form.message"
                        placeholder="Message"
                        class="rounded-md p-1 w-full"
                    ></textarea>
                    <p class="text-red-500 ml-1">{{ form.errors.message }}</p>
                </div>
                <button :disabled="form.processing"
                    class="bg-theme-red px-2 py-1 rounded-md p-1 text-white hover:bg-slate-50 hover:text-red-500 w-full"
                >
                सम्पर्क गर्नुहोस
                </button>
            </form>
            </div>
        </div>
    </div>
    <div class="bg-black px-5 lg:px-56 py-5 flex justify-between flex-col md:flex-row">
        <h1 class="text-white text-sm">
            ©2024 रोल्पाली सेवा समाज सर्वाधिकार सुरक्षित
        </h1>
        <h1 class="text-white text-sm">
            Developed by
            <a
                href="http://tulbahadurkhatri.com.np/"
                target="_blank"
                class="text-blue-400 font-bold ml-1 hover:underline"
                >Tul Bahadur Khatri <span class="text-xs">9847862779</span></a
            >
        </h1>
    </div>
</template>
