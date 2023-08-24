<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <header id="header" class="fixed-top d-flex align-items-center bghead">
        <div
            class="container d-flex align-items-center justify-content-between"
        >
            <div class="d-flex">
                <img
                    class="logo"
                    src="assets/img/logo1.png"
                    alt=""
                    srcset=""
                    width="75"
                />
                <img src="assets/img/bg-tex.png" class="logo1" width="240" />
            </div>
            <div>
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li>
                        <Link

                         :class="['nav-link scrollto', route().current('home') ? 'active' : null,]"
                          href="/">Home</Link>
                        </li>
                        <li>
                            <Link 
                             :class="['nav-link scrollto', route().current('about') ? 'active' : null,]"
                             href="/about"
                                >About US</Link
                            >
                        </li>
                        <!-- <li>
                            <a 
                             :class="['nav-link scrollto', route().current('product') ? 'active' : null,]"
                             href="/product"
                                >Products</a
                            >
                        </li> -->
                        <!-- <li><a class="nav-link scrollto " href="Features.html">Features</a></li>
                  <li><a href="Fancy.html">Fancy</a></li> -->
                        <!-- <li class="dropdown">
                            <a href="/collection"
                            :class="['', route().current('collection') ? 'active' : null,]"
                                ><span>Collection</span>
                                <i class="bi bi-chevron-down"></i
                            ></a>
                            <ul>
                                <li class="dropdown">
                                    <a href="/collection"
                                        ><span>Giftbox</span>
                                        <i class="bi bi-chevron-right"></i
                                    ></a>
                                    <ul>
                                        <li>
                                            <a href="/collection">20 Item</a>
                                        </li>
                                        <li>
                                            <a href="/collection">30 Item</a>
                                        </li>
                                        <li>
                                            <a href="/collection">40 Item</a>
                                        </li>
                                        <li>
                                            <a href="/collection">50 Item</a>
                                        </li>
                                        <li>
                                            <a href="/collection">60 Items</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="/collection">Flowerpot</a></li>
                                <li>
                                    <a href="/collection">Ground Chakkar</a>
                                </li>
                                <li><a href="/collection">Bomb</a></li>
                                <li><a href="/collection">Sparklers</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <Link
                             :class="['nav-link scrollto', route().current('contact') ? 'active' : null,]"
                             href="/contact"
                                >Contact Us</Link
                            >
                        </li>
                        <!-- <li>
                            <a
                                href="/"
                                class="get-started-btn scrollto text-white"
                                >Order Now</a
                            >
                        </li> -->
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
            </div>

            <!-- <a href="#about" class="get-started-btn scrollto">Order Now</a> -->
        </div>
    </header>
    <!-- End Header -->
</template>
