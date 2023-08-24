<script setup>
import OtherLayout from "@/Layouts/OtherLayout.vue";
</script>

<template>
    <OtherLayout>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="https://wa.link/zt2tjo">
                <img src="assets/img/whatsapp.png" class="whatsapp"
            /></a>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="assets/img/Pandas_pricelist_2021.pdf" download="pricelist">
                <img
                    src="assets/img/prcelist.png"
                    class="booknow blink"
                    download
            /></a>
        </div>
        <!-- flowerpot -->
        <div class="list">
            <div class="section-title" style="margin-top: 11px">
                <h2 class="d-flex justify-content-center text-danger">
                    Product category
                </h2>
            </div>
            <div class="warpper">
                <input
                    class="radio"
                    id="one"
                    name="group"
                    type="radio"
                    checked
                />
                <input class="radio" id="two" name="group" type="radio" />
                <input class="radio" id="three" name="group" type="radio" />
                <input class="radio" id="four" name="group" type="radio" />
                <div class="tabs">
                    <label class="tab" id="one-tab" for="one">Flowerpot</label>
                    <label class="tab" id="two-tab" for="two"
                        >Ground Chakker</label
                    >
                    <label class="tab" id="three-tab" for="three">Bomb</label>
                    <label class="tab" id="four-tab" for="four"
                        >Sparklers</label
                    >
                </div>
                <div class="panels">
                    <div class="panel" id="one-panel">
                        <div class="panel-title">Flowerpot Small</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//flowerpot small.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">Flowerpot Asoka</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//flowerpot asoka.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">Flowerpot Special</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//flowerpot spl.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">Flowerpot Deluxe</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//flowerpot delx.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                    </div>
                    <!-- ground chakker -->
                    <div class="panel" id="two-panel">
                        <div class="panel-title">Ground Chakkar Big</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//Gc big.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">Ground Chakkar Special</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//gc spl.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">Ground Chakkar Deluxe</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//gc delux.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">
                            Ground Chakkar Super Deluxe
                        </div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//winner delx.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                    </div>

                    <!-- Bombs Section -->
                    <div class="panel" id="three-panel">
                        <div class="panel-title">BulletBomb</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//bullet bomb.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">Dinosur Bomb</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//din domb.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">Deluxe Bomb</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//deluxe bomb.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">Digital Bomb</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//digital bomb.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                    </div>
                    <!-- End of Bomb Section -->

                    <!-- Sparkles Section -->
                    <div class="panel" id="four-panel">
                        <div class="panel-title">7 CM Sparklers</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//Sparklers 7.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">10 CM Sparklers</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//Sparklers 10.png"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">15 CM Sparklers</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//Sparklers 15.png"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                        <div class="panel-title">30 CM Sparklers</div>
                        <div class="crakers">
                            <img
                                src="assets/img/products//Sparklers 30.jpg"
                                alt=""
                                srcset=""
                                class="crakersimg"
                            />
                            <p class="details">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptates nam maxime libero
                                praesentium dolor aspernatur eveniet blanditiis
                                fuga eaque corrupti illo fugiat porro ad
                                provident aliquam commodi, odio quas
                                consequuntur.
                            </p>
                        </div>
                    </div>
                    <!-- End of Sparkles Section -->
                </div>
            </div>
        </div>
        <!-- ground chakker -->

        <!-- ======= Tabs Section ======= -->
        <section id="tabs" class="tabs">
            <div class="container" data-aos="fade-up">
                <div class="section-title" style="margin-top: 11px">
                    <h2 class="d-flex justify-content-center text-danger">
                        Giftbox category
                    </h2>
                </div>

                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-3">
                        <a
                            class="nav-link active show"
                            data-bs-toggle="tab"
                            data-bs-target="#tab-1"
                        >
                            <i class="bi bi-2-square-fill"></i>&nbsp;
                            <i class="bi bi-0-square-fill"></i>
                            <h4 class="d-none d-lg-block">ITEMS GIFTBOX</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#tab-2"
                        >
                            <i class="bi bi-3-square-fill"></i>&nbsp;
                            <i class="bi bi-0-square-fill"></i>
                            <h4 class="d-none d-lg-block">ITEMS GIFTBOX</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#tab-3"
                        >
                            <i class="bi bi-4-square-fill"></i>&nbsp;
                            <i class="bi bi-0-square-fill"></i>
                            <h4 class="d-none d-lg-block">ITEMS GIFTBOX</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#tab-4"
                        >
                            <i class="bi bi-6-square-fill"></i>&nbsp;
                            <i class="bi bi-0-square-fill"></i>
                            <h4 class="d-none d-lg-block">ITEMS GIFTBOX</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                <h3>20 items Giftbox Crackers List</h3>
                                <p class="fst-italic">GIFT BOX DETAILS</p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i> 7
                                        CM Electric Sparklers- 1 Box, 7 CM
                                        Colour Sparklers-1 Box,10 CM Colour
                                        Sparklers-1 Box,10 CM Electric
                                        Sparklers-1 Box,Ground Chakkar Big (10
                                        Pcs)-1 Box,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Flower Pots Big (5 Pcs)-1 Box,Twinkling
                                        Star Big (5 Pcs)-1 Box,Orange Bijili (50
                                        Pcs)-1 Bag,2 Lakshmi-1 Pkt,2 3/4 Bird-1
                                        Pkt,28 Chorsa-1 Pkt,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i> 3
                                        1/2 Lakshmi-1 Pkt,4 Inch Lakshmi-1
                                        Pce,Docomo-1 Pce,Aerial 1 Sound-1
                                        Pce,Aerial Crackling-1 Pce,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Emmies-1 Pce,Twister-1 Pce,Scooby Doo-1
                                        Pce,Star Buds-1 Pce.
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="col-lg-6 order-1 order-lg-2 text-center"
                                data-aos="fade-up"
                                data-aos-delay="200"
                            >
                                <img
                                    src="assets/img/tabs-1.png"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0"
                            >
                                <h3>30 items Giftbox Crackers List</h3>
                                <p class="fst-italic">GIFT BOX DETAILS</p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i> 7
                                        CM Electric Sparklers- 1 Box, 7 CM
                                        Colour Sparklers-1 Box,10 CM Colour
                                        Sparklers-1 Box,10 CM Electric
                                        Sparklers-1 Box,Ground Chakkar Big (10
                                        Pcs)-1 Box,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Flower Pots Big (5 Pcs)-1 Box,Twinkling
                                        Star Big (5 Pcs)-1 Box,Orange Bijili (50
                                        Pcs)-1 Bag,2 Lakshmi-1 Pkt,2 3/4 Bird-1
                                        Pkt,28 Chorsa-1 Pkt,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i> 3
                                        1/2 Lakshmi-1 Pkt,4 Inch Lakshmi-1
                                        Pce,Docomo-1 Pce,Aerial 1 Sound-1
                                        Pce,Aerial Crackling-1 Pce,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Emmies-1 Pce,Twister-1 Pce,Scooby Doo-1
                                        Pce,Star Buds-1 Pce.
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="col-lg-6 order-1 order-lg-2 text-center"
                            >
                                <img
                                    src="assets/img/tabs-2.png"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0"
                            >
                                <h3>50 items Giftbox Crackers List</h3>
                                <p class="fst-italic">GIFT BOX DETAILS</p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i> 7
                                        CM Electric Sparklers- 1 Box, 7 CM
                                        Colour Sparklers-1 Box,10 CM Colour
                                        Sparklers-1 Box,10 CM Electric
                                        Sparklers-1 Box,Ground Chakkar Big (10
                                        Pcs)-1 Box,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Flower Pots Big (5 Pcs)-1 Box,Twinkling
                                        Star Big (5 Pcs)-1 Box,Orange Bijili (50
                                        Pcs)-1 Bag,2 Lakshmi-1 Pkt,2 3/4 Bird-1
                                        Pkt,28 Chorsa-1 Pkt,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i> 3
                                        1/2 Lakshmi-1 Pkt,4 Inch Lakshmi-1
                                        Pce,Docomo-1 Pce,Aerial 1 Sound-1
                                        Pce,Aerial Crackling-1 Pce,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Emmies-1 Pce,Twister-1 Pce,Scooby Doo-1
                                        Pce,Star Buds-1 Pce.
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="col-lg-6 order-1 order-lg-2 text-center"
                            >
                                <img
                                    src="assets/img/tabs-4.png"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0"
                            >
                                <h3>60 items Giftbox Crackers List</h3>
                                <p class="fst-italic">GIFT BOX DETAILS</p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i> 7
                                        CM Electric Sparklers- 1 Box, 7 CM
                                        Colour Sparklers-1 Box,10 CM Colour
                                        Sparklers-1 Box,10 CM Electric
                                        Sparklers-1 Box,Ground Chakkar Big (10
                                        Pcs)-1 Box,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Flower Pots Big (5 Pcs)-1 Box,Twinkling
                                        Star Big (5 Pcs)-1 Box,Orange Bijili (50
                                        Pcs)-1 Bag,2 Lakshmi-1 Pkt,2 3/4 Bird-1
                                        Pkt,28 Chorsa-1 Pkt,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i> 3
                                        1/2 Lakshmi-1 Pkt,4 Inch Lakshmi-1
                                        Pce,Docomo-1 Pce,Aerial 1 Sound-1
                                        Pce,Aerial Crackling-1 Pce,
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Emmies-1 Pce,Twister-1 Pce,Scooby Doo-1
                                        Pce,Star Buds-1 Pce.
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="col-lg-6 order-1 order-lg-2 text-center"
                            >
                                <img
                                    src="assets/img/tabs-3.png"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Tabs Section -->
    </OtherLayout>
</template>
