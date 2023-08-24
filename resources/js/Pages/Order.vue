<script setup>
import HomeLayout from "@/Layouts/HomeLayout.vue";
import { Link } from "@inertiajs/vue3";
import { Head, useForm } from '@inertiajs/vue3';
import { ref, onMounted } from "vue";
import { computed } from "vue";
import { useStore } from "vuex";
import { pick } from 'lodash';


const form = useForm({
    csrf: "",
    name: "",
    email: "",
    mobile_number: "",
    whatsapp_number: "",
    address: "",
    city_town: "",
    district: "",
    state: "",
    pin_code: "",
    order_items: null,
});
const store = useStore();

const addItem = (item) => {
    store.commit("addToCart", item);
};

const removeItem = (item) => {
    store.commit("removeItemFromCart", item);
};

const clearItem = (item) => {
    store.commit("clearCart", item);
};



const totalItems = computed(() => store.getters.totalItems);
const totalPrice = computed(() => store.getters.totalPrice);
const itemTotalCount = (product_id) => store.getters.countByItem(product_id);
const itemTotalPrice = (product_id) => store.getters.priceByItem(product_id);
const orderItems = computed(() => {
    const orderItemsData = store.getters.getOrderItems;
    const pickedItems = orderItemsData.map(item => pick(item, ['id', 'quantity']));
    return pickedItems;
});


onMounted(() => {
    setTimeout(appendApp, 10);
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
    setTimeout(mainJS, 300);

    function magnificPopupJS() {
        let magnificPopupJS = document.getElementById("magnific-popup-js");
        if (magnificPopupJS != null) {
            magnificPopupJS.remove();
        }
        let mainScript = document.createElement("script");
        mainScript.setAttribute("src", "/assets/js/magnific-popup.min.js");
        mainScript.setAttribute("id", "magnific-popup-js");
        document.body.appendChild(mainScript);


    }
    setTimeout(magnificPopupJS, 500);

    function initMagnificPopup() {

        $(document).ready(function() {
            $('.product-image').magnificPopup({type:'image'});
        });
    }
    setTimeout(initMagnificPopup, 1000);

    form.csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
});

const props = defineProps({
    status: String,
    sliders: Object,
    products: Object,
    categories: Object,
    orders: Object,
    global_discount: Number,
    starting_year: Number,
    min_order_value: Number,
    mobile_number_1: Number,
    mobile_number_2: Number,
    mobile_number_3: Number,
    mobile_number_4: Number,
    mobile_number_5: Number,
    marquee_content: Object,
    bank_details : Object,
    company_address: String,
    
});
const submitbuttonvisible = computed(() => store.getters.totalPrice - (store.getters.totalPrice * props.global_discount / 100) >= props.min_order_value);
const newOrderPlaced = () => {
    form.order_items = orderItems;
    form.post(route('orders.store'));
};

</script>
<template>
    <HomeLayout :company_address=company_address :mobile_number_3=mobile_number_3>

        <!-- my change -->
        <div class="bg-black" style="background-color:black; display: flex; position: sticky; top: 85px; z-index: 998;">
            <div class=" animate__pulse container align-items-center position-sticky d-flex Order1 mt-2 mb-2"
                style="display: block; color: white; height:20px;">
                <span style=" font-size: medium; font-weight: 800;"> Net Total :</span> &nbsp; &#8377; {{
                    Math.round(totalPrice - (totalPrice *
                        global_discount / 100)) }}


            </div>
        </div>

        <!-- running scroll (content) -->
    <div class="container mx-auto"> 
           <marquee behavior="scroll" scrollamount="5" direction="" class="marqee mt-2"
            style="font-size: large; font-family: 'Times New Roman', Times, serif; color:red"> {{ marquee_content }}</marquee>
        </div>

       
        <!-- <div class="container">
             <div class="text-center my-2 text-white fw-bold h3" style=" background-color:  #991b1b;">
                <div class="p-2 herosection">Crackers Avaliable 365 Days</div>
                <div style="color: yellow;  " class="p-2 herosection">Minimum Order
                    <span id="minvalue">{{ min_order_value }}</span> Rupees Only/-
                </div>
                <div class="p-2 herosection">Diwali Sales Started For {{ starting_year }}</div>
                <div style="color: yellow;" class="p-2 herosection"> Upto {{ global_discount }}% Discount</div>
            </div> 
        </div> -->

        <section class="section1">
        
            <div class="container">
                <dl v-for="category in categories" v-key="category.id" class="accordion1 ">

                    <dt class="open d-flex ">

                        <!-- <div style="width:min-content ;margin-top: 6px; ">{{ category.id }}</div> -->
                        <div style='width:90%; font-family:Copperplate Gothic Light;font-size: 23px; '> {{
                            category.category.toUpperCase() }}</div>



                    </dt>

                    <dd>
                        <div class="total-card">
                            <div v-for="product in category.products" v-key="product.id" class="cards1">
                               
                                <div class="sml justify-content-around align-items-center row"
                                    style=" height: 130px;">
                                    <div
                                        class="order-space justify-content-around align-items-center container-product col-lg-5 col-md-6">
                                        <div class="fss-5 text-black ">
                                            <span class="name">{{ product.name }}</span>
                                        </div>
                                        <div class="fss-5">
                                            <span class="tamil_name  fw-bold">{{ product.tamil_name }}</span>

                                        </div>

                                        <div class="fss-5">
                                            <span class="actual_price" style="color: #94a3b8;"> ₹{{ product.price }}</span>
                                        </div>

                                        <div class="fss-5">
                                            <span class="strike actual_price" style="color: #94a3b8;"> ₹{{
                                                Math.round(product.price *
                                                    global_discount / 100) }}</span>
                                        </div>

                                        <div class="fss-5 text-success price fw-bold">
                                            ₹{{ product.price -
                                                Math.round(product.price *
                                                    global_discount / 100) }}
                                        </div>
                                        <div class="d-lg-none d-md-none d-flex">

                                        </div>
                                    </div>

                                    <div class="purchase-info col-lg-3 col-md-6">

                                        <a class="product-image" :href="'storage/' + product.image"
                                       >
                                            <img class="imageGallery" v-bind:src="'storage/' + product.image" alt=""  />
                                        </a>

                                        <div class="addbtn ">
                                            <button v-on:click="removeItem(product)" v-if="itemTotalCount(product.id) != 0" type="button" > -
                                            </button>

                                            &nbsp;
                                            <button class="mainBtn qty"  @click="itemTotalCount(product.id) == 0 && addItem(product)">
                                                {{
                                                    itemTotalCount(product.id) == 0 ? "ADD" : itemTotalCount(product.id)
                                                }}</button>&nbsp;

                                            <button type="button" v-on:click="addItem(product)" v-if="itemTotalCount(product.id) != 0">
                                                +
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>

            <div class="container pb-3">
                <form @submit.prevent="newOrderPlaced">
                    <div class="row g-4">
                        <div class="col-xl-6 ">
                            <div id="contact" class="container">
                                <div class="row">
                                    <div v-if="status" class="text-success">
                                        {{ status }}
                                    </div>
                                    <!-- <h4 class="fw-bold text-lg text-center text-white p-2 "
                                        style="background-color: #991b1b;">Customer Details</h4> -->
                                    <div class="col-md-6  py-md-0 mt-3 ">
                                        <input type="text" id="subject" name="name" class="form-control form-control"
                                            placeholder="Name" v-model="form.name" required />
                                        <InputError class="mt-2" :message="form.errors.name" />
                                    </div>
                                  
                                    <div class="col-md-6  py-md-0 mt-3 ">
                                        <input type="text" id="subject" name="email" class="form-control form-control"
                                            placeholder="Email" v-model="form.email" required />
                                        <InputError class="mt-2" :message="form.errors.email" />
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6  py-md-0 mt-3">
                                        <input type="text" id="subject" name="mobile_number" min="0"
                                            class="form-control form-control" v-model="form.mobile_number"
                                            placeholder="Mobile Number" required />
                                        <InputError class="mt-2" :message="form.errors.mobile_number" />
                                    </div>
                                    <div class="col-md-6  py-md-0 mt-3">
                                        <input type="text" name="whatsapp_number" min="0"
                                            class="form-control form-control" v-model="form.whatsapp_number"
                                            placeholder="Whatsapp Number" required />
                                        <InputError class="mt-2" :message="form.errors.whatsapp_number" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  py-md-0 mt-3">
                                        <input type="text" id="subject" name="address" class="form-control form-control"
                                            placeholder="Delivery point" v-model="form.address" required />
                                        <InputError class="mt-2" :message="form.errors.address" />
                                    </div>
                                    <div class="col-md-6  py-md-0 mt-3">
                                        <input type="text" id="subject" name="city_town" class="form-control form-control"
                                            placeholder=" Confirm Delivery Point" v-model="form.city_town" required />
                                        <InputError class="mt-2" :message="form.errors.city_town" />
                                    </div>
                                </div>
  
                            </div>
                        </div>
                        <div class="col-xl-6 col-12 total_bottom">
                            <div class="d-flex justify-content-between mx-2 px-1 ">
                                <div class=" col-6 form-group">
                                    <h4 class="fw-bold">Total Amount

                                    </h4>
                                    <p class=" bg-black py-2 text-black text-left">₹ {{ totalPrice }}</p>


                                </div>
                                <div class=" col-5 form-group">


                                    <h4 class="fw-bold ">Discount </h4>
                                    <p class=" bg-black py-2 text-black text-left ">₹ {{ Math.round(global_discount / 100
                                        *
                                        totalPrice) }}</p>

                                </div>

                            </div>
                            <div class="row mx-1 px-2">
                                <h4 class="col-12 text-left fw-bold  "> Net Total</h4>
                                <p id="totalPrice" class="bg-black py-1 text-black text-center text-lg fw-bold"
                                    style="font-size: 25px;">₹
                                    {{ Math.round(totalPrice - (totalPrice * global_discount / 100)) }}
                                </p>
                                <!-- <span v-if="Math.round(totalPrice - (totalPrice * global_discount / 100)) < min_order_value" class="error-message">
     Minimum  Value order {{ min_order_value }}
    </span> -->

                            </div>
                            <div class="row mx-1 px-2">

                                <div class="mt-3 px-0">
                                    <button
                                        class="btn mx-auto btn-primary btn-lg bg-danger border-danger col-lg-12 col-12 py-1 text-white text-center text-lg fw-bold"
                                        style="border-radius: 0px;"  id="submitBtn" type="submit">
                                        Submit</button>
                                        
                                    
                                    <!--   -->


                                </div>


                            </div>
                        </div>
                    </div>
                </form>
            </div>

           
            <div style="display: flex; position: sticky; top: 0; z-index: 100000">
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                        class="bi bi-arrow-up-short"></i></a>

                <!-- <a href="https://wa.link/w3i0ww" id="waBtn"><img src="img/banner/whatsapp.png" class="waimg" /></a> -->
                <a href="https://api.whatsapp.com/send?phone=9487028086" id="waBtn"><img src="img/banner/whatsapp.png" class="waimg"  /></a>

            </div>




        </section>
    </HomeLayout>
</template>


<style>
.error-message {
  color:  yellow;
 
  animation: blinker 1s linear infinite;
  
}

@keyframes blinker {
    0%{
    opacity: 0;
    color: yellow;
  }
  50% {
    opacity: 1;
    color:red;
  }
  100% {
    opacity: 0;
    color: red;
}
}



#waBtn {
    display: block;
    width: 60px;
    border-radius: 10px;
    border-radius: 250px;
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    /* background-color: green; */
    color: white;
    cursor: pointer;
    padding: 5px;
    border-radius: 4px;
    mix-blend-mode: multiply;
}

button#waBtn {
    border-radius: 50px;

}</style>