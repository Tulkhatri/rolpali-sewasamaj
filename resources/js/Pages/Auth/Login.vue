<script setup>
import { useForm} from "@inertiajs/vue3";
import TextInput from "../../components/BackPanel/TextInput.vue";
const form = useForm({
    email: null,
    password: null,
});

const submit =()=>{
    form.post(route('admin.login'),{
        onError: ()=>form.reset('password'),
    });
}
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="Login"></Head>
    <div class="upcomming-event bg-slate-100 py-20">
        <div class="mx-5 lg:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Admin Login
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img
                    src="../../../assets/images/icon/icon.png"
                    alt=""
                    class=""
                />
            </div>
        </div>
        <div class="login-row mt-10 mx-5 lg:px-56">
            <form @submit.prevent="submit" class="md:w-1/2 md:m-auto">
               <TextInput name ="Email" type ="email" v-model="form.email" :message="form.errors.email"/>
                <div class="my-5">
                <TextInput name ="Password" type ="password" v-model="form.password" :message="form.errors.password"/>
                </div>
                <button
                    class="bg-theme-red p-2 rounded-md text-white hover:bg-red-700 w-full"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
</template>
