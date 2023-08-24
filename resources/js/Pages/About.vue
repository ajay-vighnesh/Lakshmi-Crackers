<script setup>
import Homelayout from "@/Layouts/Homelayout.vue";
import { ref, onMounted } from "vue";


const props = defineProps({
    about_page: Object,
    company_address: String,
    mobile_number_3:Number,
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

});

</script>

<template>
    <Homelayout :company_address=company_address :mobile_number_3=mobile_number_3>
        

        <section class="about_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row" v-for="about_page in about_page">
                <div class="col-lg-7 col-sm-7">
                    <div class="about_part_img">
                        <!-- <img src="/img/banner/about_banner_1.jpg" alt="#"> -->
                        <img v-bind:src="'storage/' +about_page.image " />
                    </div>
                </div>
                <div class="col-lg-5 col-sm-5">
                    <div class="about_part_img section_bottom">
                        <!-- <p>Fly seed a it hath own light deep our meat land bearing won bring you two
                            were together divide set kind stars firmament evning from forth seas let
                            air whales which of gathering be sixth. Seed won't. Creature she'd living
                            said blessed. Rule plac also seasons was itself of for days subdue
                            great own male itsel</p>
                        <p>Fly seed a it hath own light deep our meat land bearing won bring you two
                            were together divide set kind stars firmament evning from forth seas let
                            air whales which of gathering be sixth. Seed won't. Creature she'd living
                            said blessed. Rule plac also seasons was itself of for days subdue
                            great own male itsel</p>
                        <p>Fly seed a it hath own light deep our meat land bearing won bring you two
                            were together divide set kind stars firmament evning from forth seas let
                            air whales which of gathering be sixth. Seed won't. Creature she'd living
                            said blessed. Rule plac also seasons was itself of for days subdue
                            great own male itsel</p>
                        <p>Fly seed a it hath own light deep our meat land bearing won bring you two
                            were together divide set kind stars firmament evning from forth seas let
                            air whales which of gathering be sixth. Seed won't. Creature she'd living
                            said blessed. Rule plac also seasons was itself of for days subdue
                            great own male itsel</p> -->
                            <p v-html = "about_page.about"></p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>


    <!-- about part end-->

    <!-- Service part start-->
    <section class="service_part section_padding mr_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span ><img src="/img/banner/2.png" alt=""></span>
                            <h2>Best Quality</h2>
                            <p>We offer our Best Quality to our Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span ><img src="/img/banner/3.png" alt=""></span>
                            <h2>Safe to Use</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span><img src="/img/banner/4.png" alt=""></span>
                            <h2>Genuine Price</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span class="flaticon-policeman"></span>
                            <h2>Fully Suppport</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <div class="containers h-100">
        <div class="row align-items-center h-100">
          <div class="container rounded">
            <h1 class="text-center text-primary font-weight-bold">Our Brands</h1>
            <div class="sliders">
              <div class="logos">
                <i class="fab fa-js fa-4x"></i>
                <i class="fab fa-linkedin-in fa-4x"></i>
                <i class="fab fa-dribbble fa-4x"></i>
                <i class="fab fa-medium-m fa-4x"></i>
                <i class="fab fa-github fa-4x"></i>
              </div>
              <div class="logos">
                <i class="fab fa-js fa-4x"></i>
                <i class="fab fa-linkedin-in fa-4x"></i>
                <i class="fab fa-dribbble fa-4x"></i>
                <i class="fab fa-medium-m fa-4x"></i>
                <i class="fab fa-github fa-4x"></i>
              </div>
            </div>
          </div>
        </div>
      
      </div>

    <!-- Service part end-->
    <!-- cta_part part start-->
    <!-- <section class="cta_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta_text">
                        <h2>Their was of wherein darkness tree them own it firmament
                            fourth you whose void grass gree</h2>
                        <a href="#" class="cta_btn">Request Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- cta_part part end-->

    <!--::review_part start::-->
    <!-- <section class="review_part section_padding section_bg">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-9">

                    <div class="slider">
                        <div data-index="1">
                            <div class="client_review_text text-center">
                                <p>Thing yielding place gathered heaven second isn't darkness does not good very dry
                                    morning signs
                                    isn't for spirit stars man meat beginning. Meat earth. Face seas doesn't life
                                    doesn't fruit
                                    brought life gathering also lights isn't day a wherein firmament fruitful read
                                    ability</p>

                            </div>
                        </div>
                        <div data-index="2">
                            <div class="client_review_text text-center">
                                <p>Thing yielding place gathered heaven second isn't darkness does not good very dry
                                    morning
                                    signs isn't for spirit stars man meat beginning. Meat earth. Face seas doesn't life
                                    doesn't
                                    fruit brought life gathering also lights isn't day a wherein firmament fruitful read
                                    ability</p>
                            </div>
                        </div>
                        <div data-index="3">
                            <div class="client_review_text text-center">
                                <p>Thing yielding place gathered heaven second isn't darkness does not good very dry
                                    morning
                                    signs isn't for spirit stars man meat beginning. Meat earth. Face seas doesn't life
                                    doesn't fruit brought life gathering also lights isn't day a wherein firmament
                                    fruitful
                                    read ability</p>
                            </div>
                        </div>
                        <div data-index="4">
                            <div class="client_review_text text-center">
                                <p>Thing yielding place gathered heaven second isn't darkness does not good very
                                    dry morning signs isn't for spirit stars man meat beginning. Meat earth.
                                    Face seas doesn't life doesn't fruit brought life gathering also lights
                                    isn't day a wherein firmament fruitful read ability</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="slider-nav-thumbnails">
                        <div class="slider-thumbnails">
                            <img src="mg/client/client_1.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Richard Kellerman</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="mg/client/client_2.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="mg/client/client_3.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Richard Kellerman</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="mg/client/client_4.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="mg/client/client_1.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Richard Kellerman</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="mg/client/client_2.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::blog_part end::-->
<!--  -->
<!-- <section class="cta_area"> -->
<div class="containers h-100 invisible">
    <div class="row align-items-center h-100">
      <div class="container rounded">
        <h1 class="text-center text-info font-weight-bold">Our Brands</h1>
        <div class="sliders">
          <div class="logos">
            <i class="fab fa-js fa-4x"></i>
            <i class="fab fa-linkedin-in fa-4x"></i>
            <i class="fab fa-dribbble fa-4x"></i>
            <i class="fab fa-medium-m fa-4x"></i>
            <i class="fab fa-github fa-4x"></i>
          </div>
          <div class="logos">
            <i class="fab fa-js fa-4x"></i>
            <i class="fab fa-linkedin-in fa-4x"></i>
            <i class="fab fa-dribbble fa-4x"></i>
            <i class="fab fa-medium-m fa-4x"></i>
            <i class="fab fa-github fa-4x"></i>
          </div>
        </div>
      </div>
    </div>
  
  </div>
<!-- </section> -->



        </Homelayout>
</template>
