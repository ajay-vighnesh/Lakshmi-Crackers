
<script setup>
import HomeLayout from "@/Layouts/HomeLayout.vue";
import { Link } from "@inertiajs/vue3";

// import { computed } from 'vue';
// import { useStore } from 'vuex';


// const store = useStore();

// const addItem = (item) => {
//   store.dispatch('addToCart', item);
// };

// const removeItem = (item) => {
//   store.dispatch('removeItem', item);
// };

// const totalItems = computed(() => store.state.cartItemCount);
// const totalPrice = computed(() => store.getters.totalPrice);
// const itemTotalPrice = computed(()=> store.getters.itemTotalPrice);
</script>



<template>
    <HomeLayout>
        <!-- <div style="display: flex;position: sticky;top: 0;z-index: 99;">
                <a href="#booknow1"> <img src="assets/img/addcart1.png" class="booknow1"></a>
            </div> -->
        <div style="display: flex; position: sticky; top: 0; z-index: 998">
            <div
                class="ordertext container-fluied justify-content-evenly d-flex align-items-center Order1"
                style="display: block"
            >
                <div class="hh5 fw-bold">Original Price:₹ <span>0.0</span></div>
                <!-- <div class="hh5 fw-bold">Discount:₹ <span>0.0</span></div> -->
                <div class="hh5 fw-bold">Total Price:₹ <span>{{totalPrice}}</span></div>
            </div>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 998">
            <div
                class="ordertext container-fluied justify-content-evenly d-flex align-items-center Order2"
                style="display: block"
            >
                <div class="hh5 fw-bold">Total Item:<span> {{totalItems}}</span></div>
            </div>
        </div>

        <section class="section1">
            <!-- <marquee
                behavior="scroll"
                scrollamount="5"
                direction=""
                class="marqee mt-2"
                >Sri MaDhu CraKers - 50% Discount - 9159211336-Door
                Delivery,Pickup Service provide by Our Custmers.</marquee
            > -->

            <div
                class="justify-content-center d-flex align-items-center text-danger"
            >
                <h3 class="fw-bold mt-2">ORDER LIST</h3>
            </div>
            <div class="container d-flex justify-content-evenly mt-3 b">
                <h4 class="fw-bold fss-4">Product Name</h4>
                <h4 class="fw-bold fss-4">Actual Price</h4>
                <h4 class="fw-bold fss-4">90% Offer</h4>
                <h4 class="fw-bold fss-4">Price</h4>
                <h4 class="fw-bold fss-4">Quantity</h4>
                <h4 class="fw-bold fss-4">Total</h4>
            </div>
            <div class="container">
                <dl class="accordion1">
                    <dt class="open">Sparklers</dt>
                    <dd>
                        <div class="total-card">
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold" 
                                        >
                                            7 cm Electric Sparklers
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div
                                            class="fss-5 text-success price fw-bold"
                                        >
                                            ₹ 80
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/Sparklers 10.png"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/Sparklers 10.png"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn" id="1">
                                            <button
                                                class="minusBtn qty"
                                                type="button"
                                                value="-"
                                                v-on:click="removeItem(items) "
            
                                            >
                                                -</button
                                            >&nbsp;
                                            <button
                                                class="mainBtn qty"
                                                value="0"
                                            >
                                                ADD</button
                                            >&nbsp;
                                            <button
                                                class="plusBtn qty"
                                                type="button"
                                                value="+"
                                                v-on:click="addItem(items) "
                                            >
                                                +
                                            </button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            10 cm Electric Sparklers
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div
                                            class="fss-5 text-success price fw-bold"
                                        >
                                            ₹ 100
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/Sparklers 10.png"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/Sparklers 10.png"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn" id="2">
                                            <button
                                                class="minusBtn qty"
                                                type="button"
                                                value="-"

                                            >
                                                -</button
                                            >&nbsp;
                                            <button
                                                class="mainBtn qty"
                                                value="0"
                                            >
                                                ADD</button
                                            >&nbsp;
                                            <button
                                                class="plusBtn qty"
                                                type="button"
                                                value="+"
                                            >
                                                +
                                            </button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            15 cm Electric Sparklers
                                        </div>
                                        <div class="fss-5">₹ 800.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 100
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/Sparklers 15.png"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/Sparklers 15.png"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn" id="3">
                                            <button class="qty minusBtn">
                                                -</button
                                            >&nbsp;
                                            <button
                                                class="mainBtn qtyvalue"
                                                value="0"
                                            >
                                                ADD</button
                                            >&nbsp;
                                            <button class="qty plusBtn">
                                                +
                                            </button>
                                        </div>

                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            30 cm Electric Sparklers
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 130
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/Sparklers 30.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/Sparklers 30.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn" value="1">
                                                ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>

                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            50 cm Electric Sparklers
                                        </div>
                                        <div class="fss-5">₹ 1000.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 250
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/Sparklers 50.png"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/Sparklers 50.png"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button
                                                type="button"
                                                class="mainBtn"
                                                value="2"
                                            >
                                                ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dd>
                    <dt class="open">Flowerpot</dt>
                    <dd>
                        <div class="total-card">
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            Flowerpot small
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 80
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/flowerpot small.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/flowerpot small.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            Flowerpot Big
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 100
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/flowerpot spl.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/flowerpot spl.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            Flowerpot asoka
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 150
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/flowerpot asoka.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/flowerpot asoka.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            Flowerpot Deluxe
                                        </div>
                                        <div class="fss-5">₹ 1000.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 250
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/flowerpot delx.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/flowerpot delx.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button  
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dd>
                    <dt class="open">GroundChakkar</dt>
                    <dd>
                        <div class="total-card">
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            GroundChakkar Big
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 80
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/Gc big.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/Gc big.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            GroundChakkar Speacil
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 160
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/gc spl.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/gc spl.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            GroundChakkar Deluxe
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 90
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/gc delux.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/gc delux.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            Winner Deluxe
                                        </div>
                                        <div class="fss-5">₹ 1000.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 250
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/winner delx.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/winner delx.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dd>
                    <dt class="open">Sound Crackers</dt>
                    <dd>
                        <div class="total-card">
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            Bullet Bomb
                                        </div>
                                        <div class="fss-5">₹ 200.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 50
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <a
                                                class="link-photo"
                                                data-lightbox="img"
                                                href="assets/img/products/bullet bomb.jpg"
                                            >
                                                <img
                                                    id="imageGallery"
                                                    src="assets/img/products/bullet bomb.jpg"
                                                    alt=""
                                                    height="200px"
                                                />
                                            </a>
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div
                                            class="fss-5 mt-4 text-danger fw-bold"
                                        >
                                            Digital Bomb
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success fw-bold">
                                            ₹ 150
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/products/digital bomb.jpg"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">
                                            Deluxe Bomb
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 200
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/products/din domb.jpg"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">Hydro Bomb</div>
                                        <div class="fss-5">₹ 1000.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 250
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/products/deluxe bomb.jpg"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dd>
                    <dt class="open">Fancy</dt>
                    <dd>
                        <div class="total-card">
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">
                                            Bullet Bomb
                                        </div>
                                        <div class="fss-5">₹ 200.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 50
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/products/bullet bomb.jpg"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">
                                            Digital Bomb
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 150
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/products/digital bomb.jpg"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">
                                            Deluxe Bomb
                                        </div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 200
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/products/din domb.jpg"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">Hydro Bomb</div>
                                        <div class="fss-5">₹ 1000.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 250
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/products/deluxe bomb.jpg"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dd>
                    <dt class="open">Giftbox</dt>
                    <dd>
                        <div class="total-card">
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">20 items</div>
                                        <div class="fss-5">₹ 200.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 50
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/logo1.png"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">30 items</div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 150
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/logo1.png"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">40 items</div>
                                        <div class="fss-5">₹ 400.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 200
                                        </div>
                                    </div>

                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/logo1.png"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div
                                    class="d-grid justify-content-around align-items-center row"
                                    style="grid-template-columns: 4fr 1fr"
                                >
                                    <div
                                        class="justify-content-around align-items-center container-product col-lg-9 col-md-6"
                                    >
                                        <div class="fss-5 mt-4">50 items</div>
                                        <div class="fss-5">₹ 1000.00</div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 250
                                        </div>
                                    </div>
                                    <div
                                        class="purchase-info col-lg-3 col-md-6"
                                    >
                                        <div>
                                            <img
                                                id="imageGallery"
                                                src="assets/img/logo1.png"
                                                alt=""
                                                height="200px"
                                            />
                                        </div>
                                        <div class="addbtn">
                                            <button class="minusBtn">-</button
                                            >&nbsp;
                                            <button class="mainBtn">ADD</button
                                            >&nbsp;
                                            <button class="plusBtn">+</button>
                                        </div>
                                        <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                        <!-- <input type = "number" min = "0" value = "0"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>

            <!-- </dl> -->

            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6">
                        <div id="contact" class="container">
                            <div class="row" style="margin-top: 0px"></div>

                            <div class="row" style="margin-top: 0px">
                                <div class="col-md-4 py-3 py-md-0">
                                    <input
                                        type="text"
                                        class="form-control form-control"
                                        placeholder="Name"
                                        required
                                    />
                                </div>
                                <div class="col-md-4 py-3 py-md-0">
                                    <input
                                        type="text"
                                        class="form-control form-control"
                                        placeholder="Email"
                                        required
                                    />
                                </div>
                                <div class="col-md-4 py-3 py-md-0">
                                    <input
                                        type="number"
                                        class="form-control form-control"
                                        placeholder="Phone"
                                        required
                                    />
                                </div>
                                <div
                                    class="form-group"
                                    style="margin-top: 30px"
                                >
                                    <textarea
                                        class="form-control"
                                        id=""
                                        rows="5"
                                        placeholder="Message"
                                        required
                                    ></textarea>
                                </div>
                                <div class="text-center mt-3">
                                    <!-- {{ <button class="btn-2 ">
                                        <span id="submit" class="text">Submit</span>
                                        <i class="fa fa-check icon" style="background-color:#FF0000"></i>
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6" style="margin-top: 10px">
                        <div class="col-xl-8 mt-5">
                            <div class="w-100 form-group">
                                <div class="row">
                                    <div class="col-6 text-right">
                                        Net Total :
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="net_total pr-3">Rs.0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="row">
                                    <div class="col-6 text-right">
                                        Discount Total :
                                    </div>
                                    <div class="col-4 text-right">
                                        <span
                                            class="discount_total pr-3"
                                        ></span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="row">
                                    <div class="col-6 text-right">
                                        Sub Total :
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="sub_total pr-3"></span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="w-100 form-group minimum_order_amount_cover"
                            >
                                <div class="row">
                                    <div class="col-6 text-right">
                                        Min.Order Amount :
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="minimum_order_amount pr-3"
                                            >Rs.4,000.00</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 form-group packing_charges_cover">
                                <div class="row">
                                    <div class="col-6 text-right">
                                        Packing Charges :
                                        <span class="packing_charges">5%</span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span
                                            class="packing_charges_value pr-3"
                                        ></span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="row">
                                    <div class="col-6 text-right">
                                        Round OFF :
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="round_off pr-3"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="row">
                                    <div class="col-6 text-right">
                                        Overall Total :
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="overall_total pr-3"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="w-100 text-center mb-3">
                                <button
                                    type="button"
                                    class="btn btn-outline-danger"
                                >
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </HomeLayout>
</template>





// import HomeLayout from "@/Layouts/HomeLayout.vue";
// import { Link } from "@inertiajs/vue3";
// import { mapState, mapGetters, mapActions } from 'vuex';
// export default {
//   name: 'Cart',
//   components: {
//     Home,
//   },
//   computed: {
//     ...mapState(['cartItems']),
//     ...mapGetters(['totalPrice']),
//   },
//   methods: {
//     ...mapActions(['addItem', 'removeItem']),
//   },
// };
///////



