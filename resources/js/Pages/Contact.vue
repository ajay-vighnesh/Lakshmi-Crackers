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
      

      <!-- MAP START -->
      <section class="mt-5">
        <div class="mapouter">
          <div class="gmap_canvas" style="height:400px">
            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=sivakasi&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="height:400px">       
            </iframe>
            <a href="https://connectionsgame.org/">Connections Game</a>
          </div>
            <!-- <style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style> -->
          </div>
      </section>
      <!-- MAP END -->


      <div class="row mt-5">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form  method="POST" action="/contact-form">
            <input type="hidden" name="_token" :value="form.csrf">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="phone_number" id="phone_number" type="number" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter phone number'" placeholder='Enter phone number'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home text-dark"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet text-dark"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email text-dark"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
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
