<script setup>
import { Head, Link } from '@inertiajs/vue3';
import HomeLayout from "@/Layouts/HomeLayout.vue";

// defineProps({
//     canLogin: {
//         type: Boolean,
//     },
//     canRegister: {
//         type: Boolean,
//     },
//     laravelVersion: {
//         type: String,
//         required: true,
//     },
//     phpVersion: {
//         type: String,
//         required: true,
//     },

    
// });

const props = defineProps({
    slider: Object, 
});

</script>

<template>
    <Head title="Home" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        

        <!--  -->
        <HomeLayout>
            <!--  -->
       
    
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner" >
              <div class="carousel-item active" >
                <!-- <img v-bind:src="'storage/' +slider.image " class="d-block w-100" /> -->
                <img src="/img/banner/front_banner_2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" >
                <img src="/img/banner/front_banner_3.jpg" class="d-block w-100" alt="...">

              </div>
               <div class="carousel-item">
                <img src="/img/banner/front_banner_4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    <!--  -->

   
    <!-- about part start-->
    <section class="about_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <!-- <h2>The lawyers truth is not truth but consistency
                            or a consistent expediency</h2> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-7">
                    <div class="about_part_img">
                        <img src="/img/banner/index_image_1.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-5">
                    <div class="about_part_img section_bottom">
                        <h1 class="text-warning">Sri Lakshmi Pyro Tech</h1>
                        <h3 class="font-weight-bold">We are the leading supplier of crackers & fancy crackers</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis cum libero est consectetur sint eum fuga amet quod totam, nulla rem vero quo ad ab in minima ducimus vitae aperiam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis cum libero est consectetur sint eum fuga amet quod totam, nulla rem vero quo ad ab in minima ducimus vitae aperiam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis cum libero est consectetur sint eum fuga amet quod totam, nulla rem vero quo ad ab in minima ducimus vitae aperiam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis cum libero est consectetur sint eum fuga amet quod totam, nulla rem vero quo ad ab in minima ducimus vitae aperiam?</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about_text text-center">
                        <!-- <p>Fly seed a it hath own light deep our meat land bearing won bring you two
                            were together divide set kind stars firmament evning from forth seas let
                            air whales which of gathering be sixth. Seed won't. Creature she'd living
                            said blessed. Rule plac also seasons was itself of for days subdue
                            great own male itsel</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- Service part start-->
    <section class="service_part section_padding">
        <h1 class="text-center font-weight-bold text-success">Products Categories
        </h1>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                <Link :href="route('lars')">

                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span><img src="/img/banner/7.png" alt=""></span>
                            <h2>Lars</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>

                </Link>

                </div>
                <div class="col-lg-3 col-sm-6">
                <Link :href="route('single_sound')">

                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span><img src="/img/banner/11.png" alt=""></span>
                            <h2>Single Sound</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>

                </Link>
                </div>
                <div class="col-lg-3 col-sm-6">
                <Link :href="route('atom_bomb')">

                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span><img src="/img/banner/13.png" alt=""></span>
                            <h2>Atom Bomb</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>

                </Link>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <Link :href="('chakkra')">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span><img src="/img/banner/12.png" alt=""></span>
                            <h2>Chakkars
                            </h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </Link>
                </div>
            </div>
        </div>
    </section>
    <!-- Service part end-->
   
    <!-- Service part start-->
    <section class="service_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <Link :href="route('rocket')">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span><img src="/img/banner/6.png" alt=""></span>
                            <h2>Rockets</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </Link>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <Link :href="route('flower_pots')">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span><img src="/img/banner/14.png" alt=""></span>
                            <h2>Flower Pots</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </Link>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <Link  :href="('bijili')">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span><img src="/img/banner/10.png" alt=""></span>
                            <h2>Bijili Crackers</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </Link>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <Link :href="route('sparklers')">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span><img src="/img/banner/8.png" alt=""></span>
                            <h2>Sparklers
                            </h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </Link>
                </div>
            </div>
        </div>
    </section>
    <!-- Service part end-->

    <!--::review_part start::-->
    <section class="review_part section_padding section_bg">
        <h1 class="text-center font-weight-bold text-success">Our Customer's Review</h1>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-9">
                    <!-- MAIN SLIDES -->
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
                    <!-- THUMBNAILS -->
                    <div class="slider-nav-thumbnails">
                        <div class="slider-thumbnails">
                            <img src="img/client/client_1.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Richard Kellerman</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_2.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_3.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Richard Kellerman</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_4.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_1.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Richard Kellerman</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_2.png" alt="slideimg" class="image">
                            <div class="client_review_text text-center">
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

        </HomeLayout>
        <!--  -->
    </div>
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
