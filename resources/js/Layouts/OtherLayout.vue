<script setup>
import Navbar1 from '@/Components/partials/Navbar1.vue';
import Footer from '@/Components/partials/Footer.vue';


const props = defineProps({
    company_address: String,
    mobile_number_3:Number,
});


</script>

<template>
    <Navbar1 />

    <slot />

    <Footer :company_address="company_address" :mobile_number_3="mobile_number_3"/>
</template>
