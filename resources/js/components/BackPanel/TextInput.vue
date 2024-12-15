<script setup>
const model=defineModel({
type:null,
required:true,
});
defineProps({
    name:{
        type:String,
        required:true,
    },
    type:{
        type:String,
        default:'text',
    },
    message:String,
});
</script>
<template>
    <div class="my-4">
        <label>{{ name }}</label>
        <input
            v-model="model"
            :type="type"
            :placeholder="name"
            :class="['rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none',message?'!ring-red-500':'']"
        />
        <p class="error text-red-500" v-if="message">{{ message }}</p>
    </div>
</template>
