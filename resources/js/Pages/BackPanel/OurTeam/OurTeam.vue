<script setup>
import { ref, watch } from "vue";
import { debounce } from "lodash";
import { router } from "@inertiajs/vue3";
import PaginationLink from "../../../components/BackPanel/PaginationLink.vue";
defineProps({
    ourteam: Object,
    searchTerm: String,
    can: Object,
});
const search = ref("");
watch(
    search,
    debounce(
        (q) =>
            router.post(
                "/admin/ourteam",
                { search: q },
                { preserveState: true }
            ),
        500
    )
);
// Method to handle edit navigation
const editOurTeam = (id) => {
    router.post("/admin/ourteam/form", { id }, { preserveState: true });
};
const deleteOurTeam = (id) => {
    router.post("/admin/ourteam/delete", { id }, { preserveState: true });
};

</script>
<template>
    <div class="mr-5 shadow-[0_0_2px_0px_#B9B9B9] w-full">
        <div
            class="header flex justify-between items-center shadow-[0_0_2px_0px_#B9B9B9] p-3"
        >
            <div class="left flex justify-start items-center gap-2">
                <h1>Our Team</h1>
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
                            <Link :href="route('admin.ourteam.form')"
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
                            Name
                        </th>
                        <th class="border border-gray-300 p-2 text-left">
                            Image
                        </th>
                        <th class="border border-gray-300 p-2 text-left">
                           Post
                        </th>
                        <th class="border border-gray-300 p-2 text-left">
                            Facebook
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
                    <tr v-for="(item, index) in ourteam?.data" :key="item.id">
                        <td class="border border-gray-300 p-2">
                            {{ index + 1 }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            {{ item.name }}
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
                            {{ item.designation }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            {{ item.facebook }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            {{ item.detail }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            <div
                                class="action-wrapper flex justify-center items-center gap-2"
                            >
                                <div
                                     @click="editOurTeam(item.id)"
                                    class="edit cursor-pointer"
                                >
                                    <font-awesome-icon
                                        :icon="['fas', 'pen-to-square']"
                                        class="text-blue-400"
                                    />
                                    Edit
                        </div>
                        <div
                                     @click="deleteOurTeam(item.id)"
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
            <PaginationLink :paginator="ourteam" />
        </div>
    </div>
</template>
