<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

// Set your target date here (example: December 31, 2024, at 23:59:59)
const targetDate = new Date("2024-11-31T23:59:59").getTime(); 

// Reactive countdown variables
const days = ref('00');
const hours = ref('00');
const minutes = ref('00');
const seconds = ref('00');

const updateCountdown = () => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
        clearInterval(countdownInterval);
        days.value = hours.value = minutes.value = seconds.value = '00';
        return;
    }

    days.value = String(Math.floor(distance / (1000 * 60 * 60 * 24))).padStart(2, '0');
    hours.value = String(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
    minutes.value = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
    seconds.value = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');
};

let countdownInterval;

onMounted(() => {
    updateCountdown(); // Initial call
    countdownInterval = setInterval(updateCountdown, 1000);
});

onUnmounted(() => {
    clearInterval(countdownInterval); // Clear the interval when the component unmounts
});
</script>

<template>
    <div class="count-down-area">
        <div class="mx-5 md:mx-56">
            <h1 class="title-section text-3xl text-center font-medium text-white">
                टाइमलाइन
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/timiline.png" alt="" />
            </div>

            <h5 class="text-sm text-center text-white mt-2">आगामी कार्यक्रम</h5>
            <div class="text-xl text-center text-white flex justify-center items-center gap-2 mt-5">
                <div class="number-text-wrapper px-4 py-2 md:px-8 md:py-5 rounded-full bg-[rgba(235,27,43,0.6)] text-white font-medium">
                    <h1 class="text-xl md:text-6xl">{{ days }}</h1>
                    <h5>दिन</h5>
                </div>
                <h1 class="text-xl md:text-6xl">:</h1>
                <div class="number-text-wrapper px-4 py-2 md:px-8 md:py-5 rounded-full bg-[rgba(235,27,43,0.6)] text-white font-medium">
                    <h1 class="text-xl md:text-6xl">{{ hours }}</h1>
                    <h5>घण्टा</h5>
                </div>
                <h1 class="text-xl md:text-6xl">:</h1>
                <div class="number-text-wrapper px-4 py-2 md:px-8 md:py-5 rounded-full bg-[rgba(235,27,43,0.6)] text-white font-medium">
                    <h1 class="text-xl md:text-6xl">{{ minutes }}</h1>
                    <h5>मिनेट</h5>
                </div>
                <h1 class="text-xl md:text-6xl">:</h1>
                <div class="number-text-wrapper px-4 py-2 md:px-8 md:py-5 rounded-full bg-[rgba(235,27,43,0.6)] text-white font-medium">
                    <h1 class="text-xl md:text-6xl">{{ seconds }}</h1>
                    <h5>सेकेन्ड</h5>
                </div>
            </div>
        </div>
    </div>
</template>
