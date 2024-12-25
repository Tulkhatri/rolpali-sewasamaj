<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../../../components/BackPanel/TextInput.vue";
const props = defineProps({
    event: Object, // Incoming prop from the server
});
const form = useForm({
    id: props?.event?.id||null,
    title: props?.event?.title||null,
    detail: props?.event?.detail||null,
    address: props?.event?.address||null,
    eventDate: props?.event?.event_date||null,
    image: null,
    preview: '/storage/' + props?.event?.image??null,
});
const submit = () => {
    const res = form.post(route("admin.event.save"), {
        onError: () => {
            form.reset("title", "detail"), showNotification("", "error");
        },
        onSuccess: () => {
            form.reset();
            showNotification("", "success");
        },
    });
    if (res) {
        form.reset();
    }
    console.log(res); //undefined
};
const change = (e) => {
    form.image = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0]);
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
    <div class="mr-5 shadow-[0_0_2px_0px_#B9B9B9] w-full">
        <div
            class="header flex justify-between items-center shadow-[0_0_2px_0px_#B9B9B9] p-3"
        >
            <div
                id="customNotification"
                class="custom-notification"
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

            <div class="left flex justify-start items-center gap-2">
                <h1>Event Form</h1>
                <font-awesome-icon :icon="['fas', 'arrow-down']" />
            </div>
            <div class="right">
                <div class="button-wrapper flex justify-between gap-1">
                    <div
                        class="custom-slider-top-button-admin bg-blue-300 px-3 py-1.5 rounded-md text-nowrap"
                    >
                        <Link :href="route('admin.event')">
                            <font-awesome-icon
                                :icon="['fas', 'arrow-left']"
                                class="mr-2"
                            />
                            Back</Link
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="form-wrapper m-3">
            <form @submit.prevent="submit">
                <!-- <div class="my-4">
                    <label>Title</label>
                    <input
                        v-model="form.title"
                        type="text"
                        placeholder="Name"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    />
                    <small class="text-red-500">{{ form.errors.title }}</small>
                </div> -->
                <TextInput
                    name="Title"
                    type="text"
                    v-model="form.title"
                    :message="form.errors.title"
                />
                <TextInput
                    name="Address"
                    type="text"
                    v-model="form.address"
                    :message="form.errors.address"
                />
                <TextInput
                    name="Event Date"
                    type="date"
                    v-model="form.eventDate"
                    :message="form.errors.eventDate"
                />
                <div class="my-4">
                    <label>Details</label>
                    <textarea
                        v-model="form.detail"
                        placeholder="Details"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    ></textarea>
                    <small class="text-red-500">{{ form.errors.detail }}</small>
                </div>

                <div class="relative">
                    <label for="image" class="absolute inset-0 cursor-pointer">
                        <font-awesome-icon
                            :icon="['fa', 'fa-camera']"
                            class="text-slate-600 text-xl p-1 rounded-full bg-white"
                        />
                    </label>
                    <div class="input-image">
                        <input type="file" id="image" @input="change" hidden />
                        <img
                            class="object-cover w-28 h-28"
                            :src="form.preview"
                            alt=""
                        />
                    </div>
                    <p>{{ form.errors.image }}</p>
                </div>

                <div class="button-wrapper flex justify-end gap-1">
                    <div
                        class="custom-slider-top-button-admin bg-blue-300 px-3 py-1.5 rounded-md text-nowrap"
                    >
                        <button class="" :disabled="form.processing">
                            <font-awesome-icon :icon="['far', 'floppy-disk']" />
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
