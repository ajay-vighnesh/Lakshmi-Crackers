<script setup>
import Homelayout from "@/Layouts/Homelayout.vue";
import { Link } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import { useForm } from '@inertiajs/vue3';



defineProps({
    status: String,
    sliders: Object,
    products: Object,
    categories: Object,
    orders: Object,
    global_discount: Number,
    min_order_value: Number,
    mobile_number_1: Number,
    mobile_number_2: Number,
    mobile_number_3: Number,
    mobile_number_4: Number,
    mobile_number_5: Number,
    company_address: String,
});

onMounted(() => {
    setTimeout(appendApp, 100);
    function appendApp() {
        let jqueryminJS = document.getElementById("jquery-js");
        if (jqueryminJS != null) {
            jqueryminJS.remove();
        }
        let mainScript = document.createElement("script");
        mainScript.setAttribute("src", "/assets/js/jquery.min.js");
        mainScript.setAttribute("id", "jquery-js");
        document.body.appendChild(mainScript);

    }

    function mainJS() {
        let mainJS = document.getElementById("main-js");
        if (mainJS != null) {
            mainJS.remove();
        }
        let mainScript = document.createElement("script");
        mainScript.setAttribute("src", "/assets/js/main.js");
        mainScript.setAttribute("id", "main-js");
        document.body.appendChild(mainScript);


    }
    setTimeout(mainJS, 200);

    form.csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

});

const form = useForm({
    project_name: '',
    sitemap_path: '',
    csrf: '',
});


</script>

<template>
    <Homelayout :company_address=company_address :mobile_number_3=mobile_number_3 >
       
        <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      
      <h1 class="text-center my-5">Chakkra Crackers</h1>
      <table class="table text-center">
  <thead>
    <tr>
      <!-- <th>#</th>
      <th>First Name</th>
      <th>Last Name</th> -->
      <th>Products</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <!-- <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td> -->
      <td>Chakkra 1</td>
    </tr>
    <tr>
      <!-- <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td> -->
      <td>Chakkra 2</td>
    </tr>
    <tr>
      <!-- <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td> -->
      <td>Chakkra 3</td>
    </tr>
  </tbody>
</table>
      

    </div>
  </section>
  <!-- ================ contact section end ================= -->


    </Homelayout>
</template>



<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
