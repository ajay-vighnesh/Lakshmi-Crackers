<script setup>
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  
  company_address: String,
  mobile_number_3:Number,
    
});
</script>


<template>
  <!-- footer start -->
  <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <Link :href="route('home')"> <img src="img/LP CMYK.png" alt=""> </Link>
                        <p>Created. Image moving living fowl earth fruitful. Two hath first you're doesn you
                            life above. Living give and earth light for appear moved their behold </p>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-widget">
                        <h4>Our Service</h4>
                        <ul>
                            <li><Link :href="route('home')">Home</Link></li>
                            <li><Link :href="route('about')">About</Link></li>
                            <li><Link :href="route('order')">Order</Link></li>
                            <li><Link :href="route('contact')">Contact</Link></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Info</h4>
                        <p>4361 Morningview Lane Artland
                            Latimer, IA 50452</p>
                        <ul>
                            <li><a href="#"><i class="ti-mobile"></i>+02 - 32 365 2654</a></li>
                            <li><a href="#"><i class="ti-email"></i>ariclaw@law.com</a></li>
                            <li><a href="#"><i class="ti-world"></i> ariclawyerfirm.com</a></li>
                        </ul>
                    </div>
                </div>
        
            </div>

        </div>
       
    </footer>
        <!-- footer end -->
</template>








