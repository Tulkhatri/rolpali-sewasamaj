<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { isMenuOpen, toggleMenu } from "../../components/BackPanel/toggleMenu";
import { Link } from "@inertiajs/vue3";

const userDetailsRef = ref(null);
const outsideClick = ref(false);

// Function to handle clicks outside the menu
const handleOutsideClick = (event) => {
  if (userDetailsRef.value && !userDetailsRef.value.contains(event.target)) {
    outsideClick.value = true; // Hide the menu
    userToggleCondition.value = true; // Ensure menu is hidden
  }
};

// Global state for user Toggle
const userToggleCondition = ref(true);
const toggleUserMenu = () => {
  if (outsideClick.value) {
    // Reset the outsideClick state before toggling
    outsideClick.value = false;
    userToggleCondition.value = false; // Show the menu
  } else {
    // Toggle the menu state normally
    userToggleCondition.value = !userToggleCondition.value;
  }
};

// Attach and detach event listeners for outside clicks
onMounted(() => {
  document.addEventListener("click", handleOutsideClick);
});

onBeforeUnmount(() => {
  document.removeEventListener("click", handleOutsideClick);
});
</script>


<template>
  <header class="bg-white sticky top-0 z-20 shadow-md">
    <div class="flex justify-between items-center mx-5 py-2">
      <div class="w-[15%] flex justify-between items-center gap-2">
        <Link :href="route('admin.dashboard')">
          <div class="img-wrapper flex justify-start items-center gap-1">
            <img src="../../../assets/images/logo.jpg" class="w-14" />
            <h2 class="">Rolpali Sewa Samaj Rolpa</h2>
          </div>
        </Link>
        <font-awesome-icon
          :icon="isMenuOpen ? ['fas', 'xmark'] : ['fas', 'bars']"
          class="text-xl mr-5 cursor-pointer"
          @click="toggleMenu"
        />
      </div>
      <div class="user-section relative flex justify-start items-center gap-3">
        <span>Admin</span>
        <div
          class="image-wrapper cursor-pointer rounded-full bg-[#B9B9B9] relative"
          @click.stop="toggleUserMenu"
        >
          <font-awesome-icon :icon="['fas', 'user']" class="px-3 py-2 text-2xl text-white" />
          <font-awesome-icon
            :icon="['fas', 'angle-down']"
            class="border bg-[#B9B9B9] rounded-full px-[0.09rem] text-sm absolute bottom-0 right-0"
          />
        </div>

        <div
          ref="userDetailsRef"
          :class="[
            'absolute top-16 right-0 user-details shadow-[0_0_5px_0px_#B9B9B9] rounded-md z-50 bg-white',
            userToggleCondition || outsideClick ? 'hidden' : 'block'
          ]"
          @click.stop
        >
          <div class="m-2">
            <Link
              href="#"
              class="p-2 icon-text flex justify-start items-center rounded-md gap-2 hover:bg-slate-100"
            >
              <font-awesome-icon
                :icon="['fas', 'user']"
                class="rounded-full bg-[#B9B9B9] px-2.5 py-2 text-2xl text-white"
              />
              <h2 class="text-nowrap">Tul Bahadur Khatri</h2>
            </Link>
            <hr class="h-[0.1rem] mt-2 bg-[#dad8d8]" />
            <Link
              href="#"
              class="p-2 rounded-md hover:bg-slate-100 icon-text flex justify-between items-center gap-2 mt-3"
              @click="toggleUserMenu"
            >
              <div class="flex justify-start gap-3">
                <font-awesome-icon
                  :icon="['fas', 'gear']"
                  class="bg-[#B9B9B9] rounded-full p-1.5 text-md"
                />
                <h2 class="text-nowrap">Setting</h2>
              </div>
              <font-awesome-icon :icon="['fas', 'angle-right']" class="text-sm" />
            </Link>
            <Link
              :href="route('admin.logout')" method="post" as ="button" type="button"
              class="p-2 rounded-md hover:bg-slate-100 icon-text flex justify-start items-center gap-3"
              @click="toggleUserMenu"
            >
              <font-awesome-icon
                :icon="['fas', 'right-from-bracket']"
                class="bg-[#B9B9B9] rounded-full p-1.5 text-md"
              />
              <h2 class="text-nowrap">Log Out</h2>
            </Link>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
