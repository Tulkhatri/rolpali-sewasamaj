<script setup>
import { ref, watch } from "vue";
import { debounce } from "lodash";
import { router } from "@inertiajs/vue3";
import PaginationLink from "../../../components/BackPanel/PaginationLink.vue";
defineProps({
    donation: Object,
    searchTerm: String,
    can: Object,
});
const search = ref("");
watch(
    search,
    debounce(
        (q) =>
            router.post(
                "/admin/donation",
                { search: q },
                { preserveState: true }
            ),
        500
    )
);
// Method to handle edit navigation
const editDonation = (id) => {
    router.post("/admin/donation/form", { id }, { preserveState: true });
};
const deleteDonation = (id) => {
    router.post("/admin/donation/delete", { id }, { preserveState: true });
};

</script>
<template>
    <div class="mr-5 shadow-[0_0_2px_0px_#B9B9B9] w-full">
        <div
            class="header flex justify-between items-center shadow-[0_0_2px_0px_#B9B9B9] p-3"
        >
            <div class="left flex justify-start items-center gap-2">
                <h1>Donation</h1>
                <font-awesome-icon :icon="['fas', 'arrow-down']" />
            </div>
            <div class="right">
                <div class="button-wrapper flex justify-between gap-1">
                    <div
                        class="search-button flex justify-center items-center gap-2"
                    >
                        <div class="search-wrapper">
                            <input
                                type="search"
                                placeholder="search"
                                v-model="search"
                                class="rounded-md p-1 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-100 focus:outline-none"
                            />
                        </div>
                        <div
                            class="custom-slider-top-button-admin bg-blue-300 px-3 py-1.5 rounded-md text-nowrap"
                        >
                            <Link :href="route('admin.donation.form')"
                                >Add
                                <font-awesome-icon
                                    :icon="['fas', 'plus']"
                                    class="ml-2"
                                />
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-wrapper m-3 overflow-y-scroll h-[67vh]">
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="bg-gray-100 sticky top-0">
                        <th class="border border-gray-300 p-2 text-left">
                            S.N.
                        </th>
                        <th class="border border-gray-300 p-2 text-left">
                            Title
                        </th>
                        <th class="border border-gray-300 p-2 text-left">
                            Image
                        </th>
                        <th class="border border-gray-300 p-2 text-left">
                            Details
                        </th>
                        <th class="border border-gray-300 p-2 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in donation.data" :key="item.id">
                        <td class="border border-gray-300 p-2">
                            {{ index + 1 }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            {{ item.title }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            <img
                                :src="
                                    item.image
                                        ? '/storage/' + item.image
                                        : '/noimage.png'
                                "
                                alt=""
                                class="w-12 h-12"
                            />
                        </td>
                        <td class="border border-gray-300 p-2">
                            {{ item.detail }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            <div
                                class="action-wrapper flex justify-center items-center gap-2"
                            >
                                <div
                                     @click="editDonation(item.id)"
                                    class="edit cursor-pointer"
                                >
                                    <font-awesome-icon
                                        :icon="['fas', 'pen-to-square']"
                                        class="text-blue-400"
                                    />
                                    Edit
                        </div>
                        <div
                                     @click="deleteDonation(item.id)"
                                    class="delete cursor-pointer"
                                >
                                    <font-awesome-icon
                                        :icon="['fas', 'trash-can']"
                                        class="text-red-500"
                                    />
                                    Delete
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Pagination Links -->
        </div>
        <div class="m-4">
            <PaginationLink :paginator="donation" />
        </div>
    </div>
</template>
