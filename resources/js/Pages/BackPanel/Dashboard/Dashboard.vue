<script setup>
</script>
<template>
    <div class="mr-5 shadow-[0_0_2px_0px_#B9B9B9] w-full">
        <div class="header flex justify-between items-center shadow-[0_0_2px_0px_#B9B9B9] p-3">
            <div class="left flex justify-start items-center gap-2">
                <h1>Dashboard</h1>
                <font-awesome-icon :icon="['fas', 'arrow-down']" />
            </div>
            <div class="right">
                <div class="button-wrapper flex justify-between gap-1">
                    <div class="custom-slider-top-button-admin bg-blue-300 px-3 py-1.5 rounded-md text-nowrap">
                        <font-awesome-icon :icon="['fas', 'plus']" class="mr-2"/>
                        <Link href="#">Add</Link>
                    </div>
             </div>
            </div>
        </div>
    </div>
</template>
