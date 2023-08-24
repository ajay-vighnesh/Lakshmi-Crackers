<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
   <!-- header start -->
   <div class="main_menu menu_fixed home_menu mobile_menu_fixed ">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        
                        <Link class="navbar-brand" :href="route('home')"> <img src="img/LP CMYK.png" alt="logo" style="height: 88px;"> </Link>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <Link :href="route('home')" class="nav-link" >Home</Link>
                                </li>
                                <li class="nav-item">
                                    <Link class="nav-link" :href="route('about')">About</Link>
                                </li>
                                <li class="nav-item">
                                    <Link class="nav-link" :href="route('order')">Order</Link>
                                </li>

                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="attorneys.html">Attorneys</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li> -->
                                <li class="nav-item">
                                    <Link class="nav-link" :href="route('contact')">Contact</Link>
                                </li>
                        
                            </ul>
                        </div>
                        <a href="Pandas_pricelist_2021.pdf" class="d-none d-sm-block menu_btn" download>Download Price List</a>
                    </nav>
                </div>
             </div>
        </div>
    </div>
        <!-- header end -->

</template>
