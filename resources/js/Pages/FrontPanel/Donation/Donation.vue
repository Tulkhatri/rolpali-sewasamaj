<script setup>
import Donation from '../../../components/Donation/Donation.vue';
import PageHeader from '../../../components/PageHeader.vue';

defineProps({
    donation: Object,
});
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="सहयोग"></Head>
    <PageHeader pageheader="सहयोग" />
    <Donation :donation="donation"/>   
</template>
