// useSidebar.js
import { ref } from "vue";

// Global state for Sidebar Toggle
export const isMenuOpen = ref(true);
export const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};

// Global state for Sidebar Toggle
export const userToggleCondition = ref(true);
export const userToggole = () => {
   userToggleCondition.value = !userToggleCondition.value;
};