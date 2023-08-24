<script setup>
import Navbar from '@/Components/partials/Navbar.vue';
import Footer from '@/Components/partials/Footer.vue';
import { Link } from '@inertiajs/vue3';
import { ref, onMounted } from "vue";
import { Head } from "@inertiajs/vue3";



const props = defineProps({
    company_address: String,
    mobile_number_3: Number,
});


onMounted(() => {
    setTimeout(appendMainJS, 400);

    function appendMainJS() {
        let mainJS = document.getElementById("custom-js");
        if (mainJS != null) {
            mainJS.remove();
        }

        let mainScript = document.createElement("script");
        mainScript.setAttribute("src", "/js/custom.js");
        mainScript.setAttribute("id", "custom-js");
        document.body.appendChild(mainScript);
    }
});

</script>

<template>
    <Navbar />

    <slot />

    <Footer :company_address="company_address" :mobile_number_3="mobile_number_3"/>
</template>