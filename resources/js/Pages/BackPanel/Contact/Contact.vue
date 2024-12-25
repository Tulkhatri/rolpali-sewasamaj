<script setup>
import { ref, watch } from "vue";
import { debounce } from "lodash";
import { router } from "@inertiajs/vue3";
import PaginationLink from "../../../components/BackPanel/PaginationLink.vue";
defineProps({
    contact: Object,
    searchTerm: String,
    can: Object,
});
const search = ref("");
watch(
    search,
    debounce(
        (q) =>
            router.post(
                "/admin/contact",
                { search: q },
                { preserveState: true }
            ),
        500
    )
);
const deleteContact = (id) => {
    router.post("/admin/contact/delete", { id }, { preserveState: true });
};

</script>
<template>
    <div class="mr-5 shadow-[0_0_2px_0px_#B9B9B9] w-full">
        <div
            class="header flex justify-between items-center shadow-[0_0_2px_0px_#B9B9B9] p-3"
        >
            <div class="left flex justify-start items-center gap-2">
                <h1>Incomming Message</h1>
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
                            Phone
                        </th>
                        <th class="border border-gray-300 p-2 text-left">
                            email
                        </th>
                        <th class="border border-gray-300 p-2 text-left">
                            Address
                        </th>
                       
                        <th class="border border-gray-300 p-2 text-left">
                            Message
                        </th>
                        <th class="border border-gray-300 p-2 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in contact.data" :key="item.id">
                        <td class="border border-gray-300 p-2">
                            {{ index + 1 }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            {{ item.name }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            {{ item.phone }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            {{ item.email }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            {{ item.address }}
                        </td>
                       
                        <td class="border border-gray-300 p-2">
                            {{ item.message }}
                        </td>
                        <td class="border border-gray-300 p-2">
                            <div class="action-wrapper gap-2">
                                <div @click="deleteContact(item.id)" class="delete cursor-pointer">
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
            <PaginationLink :paginator="contact" />
        </div>
    </div>
</template>
