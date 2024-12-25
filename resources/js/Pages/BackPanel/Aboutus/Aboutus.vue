<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../../../components/BackPanel/TextInput.vue";
const props = defineProps({
    aboutus: Object, // Incoming prop from the server
});
const form = useForm({
    aboutus_title: props?.aboutus?.aboutus_title||null,
    aboutus_detail: props?.aboutus?.aboutus_detail||null,
    chairman_message: props?.aboutus?.chairman_message||null,
    vision_title: props?.aboutus?.vision_title||null,
    vision_detail: props?.aboutus?.vision_detail||null,
    mission_short_quote: props?.aboutus?.mission_short_quote||null,
    mission1_title: props?.aboutus?.mission1_title||null,
    mission1_detail: props?.aboutus?.mission1_detail||null,
    mission2_title: props?.aboutus?.mission2_title||null,
    mission2_detail: props?.aboutus?.mission2_detail||null,
    mission3_title: props?.aboutus?.mission3_title||null,
    mission3_detail: props?.aboutus?.mission3_detail||null,


    aboutus_image: null,
    preview_aboutus_image: '/storage/' + props?.aboutus?.aboutus_image??null,
    chairman_image: null,
    preview_chairman_image: '/storage/' + props?.aboutus?.chairman_image??null,
    vision_image: null,
    preview_vision_image: '/storage/' + props?.aboutus?.vision_image??null,
    mission1_image: null,
    preview_mission1_image: '/storage/' + props?.aboutus?.mission1_image??null,
    mission2_image: null,
    preview_mission2_image: '/storage/' + props?.aboutus?.mission2_image??null,
    mission3_image: null,
    preview_mission3_image: '/storage/' + props?.aboutus?.mission3_image??null,
});
const submit = () => {
    const res = form.post(route("admin.aboutus.updateaboutus"), {
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
const changeAboutusImage = (e) => {
    form.aboutus_image = e.target.files[0];
    form.preview_aboutus_image = URL.createObjectURL(e.target.files[0]);
};
const changeChairmanImage = (e) => {
    form.chairman_image = e.target.files[0];
    form.preview_chairman_image = URL.createObjectURL(e.target.files[0]);
};
const changeVisionImage = (e) => {
    form.vision_image = e.target.files[0];
    form.preview_vision_image = URL.createObjectURL(e.target.files[0]);
};
const changeMission1Image = (e) => {
    form.mission1_image = e.target.files[0];
    form.preview_mission1_image = URL.createObjectURL(e.target.files[0]);
};
const changeMission2Image = (e) => {
    form.mission2_image = e.target.files[0];
    form.preview_mission2_image = URL.createObjectURL(e.target.files[0]);
};
const changeMission3Image = (e) => {
    form.mission3_image = e.target.files[0];
    form.preview_mission3_image = URL.createObjectURL(e.target.files[0]);
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
    <div class="mr-5 shadow-[0_0_2px_0px_#B9B9B9] w-full overflow-scroll">
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
                <h1>About Us Form</h1>
                <font-awesome-icon :icon="['fas', 'arrow-down']" />
            </div>
        </div>
        <div class="form-wrapper m-3">
            <form @submit.prevent="submit">
                <div class="flex gap-2 justify-between">
                    <TextInput
                    class="basis-[20%]"
                        name="About us"
                        type="text"
                        v-model="form.aboutus_title"
                        :message="form.errors.aboutus_title"
                    />
                    <div class="my-4 basis-[70%]">
                        <label>About Us Details</label>
                        <textarea
                            v-model="form.aboutus_detail"
                            placeholder="Details"
                            class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                        ></textarea>
                        <small class="text-red-500">{{ form.errors.aboutus_detail }}</small>
                    </div>
                    <div class="image-wrapper basis-[10%]">
                        <label>Image</label>
                    <div class="relative">
                        <label for="aboutus" class="absolute inset-0 cursor-pointer">
                            <font-awesome-icon
                                :icon="['fa', 'fa-camera']"
                                class="text-slate-600 text-xl p-1 rounded-full bg-white"
                            />
                        </label>
                        <div class="input-image">
                            <input type="file" id="aboutus" @input="changeAboutusImage" hidden />
                            <img
                                class="object-cover w-28 h-28"
                                :src="form.preview_aboutus_image"
                                alt=""
                            />
                        </div>
                        <p>{{ form.errors.aboutus_image }}</p>
                    </div>
                    </div>
                </div>
                <div class="mt-4 flex gap-2 justify-between">
                 <TextInput
                    class="basis-[20%]"
                    name="Mission Quotes"
                    type="text"
                    v-model="form.mission_short_quote"
                    :message="form.errors.mission_short_quote"
                />
                <div class="my-4 basis-[70%]">
                    <label>Chairman Message</label>
                    <textarea
                        v-model="form.chairman_message"
                        placeholder="Details"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    ></textarea>
                    <small class="text-red-500">{{ form.errors.chairman_message }}</small>
                </div>
                
                <div class="relative basis-[10%]">
                    <label for="chairman_image" class="absolute inset-0 cursor-pointer">
                        <font-awesome-icon
                            :icon="['fa', 'fa-camera']"
                            class="text-slate-600 text-xl p-1 rounded-full bg-white"
                        />
                    </label>
                    <div class="input-image">
                        <input type="file" id="chairman_image" @input="changeChairmanImage" hidden />
                        <img
                            class="object-cover w-28 h-28"
                            :src="form.preview_chairman_image"
                            alt=""
                        />
                    </div>
                    <p>{{ form.errors.chairman_image }}</p>
                </div>
                </div>
            <div class="flex gap-2 justify-between">
                <TextInput
                class="basis-[20%]"
                    name="Vision Title"
                    type="text"
                    v-model="form.vision_title"
                    :message="form.errors.vision_title"
                />
            <div class="my-4 basis-[70%]">
                <label>Vision Details</label>
                <textarea
                    v-model="form.vision_detail"
                    placeholder="Details"
                    class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                ></textarea>
                <small class="text-red-500">{{ form.errors.vision_detail }}</small>
            </div>

            <div class="relative basis-[10%]">
                <label for="vision_image" class="absolute inset-0 cursor-pointer">
                    <font-awesome-icon
                        :icon="['fa', 'fa-camera']"
                        class="text-slate-600 text-xl p-1 rounded-full bg-white"
                    />
                </label>
                <div class="input-image">
                    <input type="file" id="vision_image" @input="changeVisionImage" hidden />
                    <img
                        class="object-cover w-28 h-28"
                        :src="form.preview_vision_image"
                        alt=""
                    />
                </div>
                <p>{{ form.errors.vision_image }}</p>
            </div>
            </div>
            <div class="flex gap-2 justify-between">
                <TextInput
                class="basis-[20%]"
                    name="Mission One"
                    type="text"
                    v-model="form.mission1_title"
                    :message="form.errors.mission1_title"
                />
                <div class="my-4 basis-[70%]">
                    <label>Mission One Details</label>
                    <textarea
                        v-model="form.mission1_detail"
                        placeholder="Mission one details"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    ></textarea>
                    <small class="text-red-500">{{ form.errors.mission1_detail }}</small>
                </div>

                <div class="relative basis-[10%]">
                    <label for="mission1_image" class="absolute inset-0 cursor-pointer">
                        <font-awesome-icon
                            :icon="['fa', 'fa-camera']"
                            class="text-slate-600 text-xl p-1 rounded-full bg-white"
                        />
                    </label>
                    <div class="input-image">
                        <input type="file" id="mission1_image" @input="changeMission1Image" hidden />
                        <img
                            class="object-cover w-28 h-28"
                            :src="form.preview_mission1_image"
                            alt=""
                        />
                    </div>
                    <p>{{ form.errors.mission1_image }}</p>
                </div>
            </div>
             <div class="flex gap-2 justify-between">
                <TextInput
                class="basis-[20%]"
                    name="Mission Two"
                    type="text"
                    v-model="form.mission2_title"
                    :message="form.errors.mission1_title"
                />
                <div class="my-4 basis-[70%]">
                    <label>Mission Two Details</label>
                    <textarea
                        v-model="form.mission2_detail"
                        placeholder="Mission one details"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    ></textarea>
                    <small class="text-red-500">{{ form.errors.mission2_detail }}</small>
                </div>

                <div class="relative basis-[10%]">
                    <label for="mission2_image" class="absolute inset-0 cursor-pointer">
                        <font-awesome-icon
                            :icon="['fa', 'fa-camera']"
                            class="text-slate-600 text-xl p-1 rounded-full bg-white"
                        />
                    </label>
                    <div class="input-image">
                        <input type="file" id="mission2_image" @input="changeMission2Image" hidden />
                        <img
                            class="object-cover w-28 h-28"
                            :src="form.preview_mission2_image"
                            alt=""
                        />
                    </div>
                    <p>{{ form.errors.mission2_image }}</p>
                </div>
            </div>
            <div class="flex gap-2 justify-between">
                <TextInput
                    class="basis-[20%]"
                    name="Mission Three"
                    type="text"
                    v-model="form.mission3_title"
                    :message="form.errors.mission3_title"
                />
                <div class="my-4 basis-[70%]">
                    <label>Mission Three</label>
                    <textarea
                        v-model="form.mission3_detail"
                        placeholder="Mission Three details"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    ></textarea>
                    <small class="text-red-500">{{ form.errors.mission3_detail }}</small>
                </div>

                <div class="relative basis-[10%]">
                    <label for="mission3_image" class="absolute inset-0 cursor-pointer">
                        <font-awesome-icon
                            :icon="['fa', 'fa-camera']"
                            class="text-slate-600 text-xl p-1 rounded-full bg-white"
                        />
                    </label>
                    <div class="input-image">
                        <input type="file" id="mission3_image" @input="changeMission3Image" hidden />
                        <img
                            class="object-cover w-28 h-28"
                            :src="form.preview_mission3_image"
                            alt=""
                        />
                    </div>
                    <p>{{ form.errors.mission3_image }}</p>
                </div>
            </div>
                <div class="button-wrapper flex justify-end gap-1">
                    <div
                        class="custom-slider-top-button-admin bg-blue-300 px-3 py-1.5 rounded-md text-nowrap"
                    >
                        <button class="" :disabled="form.processing">
                            <font-awesome-icon :icon="['far', 'floppy-disk']" />
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
