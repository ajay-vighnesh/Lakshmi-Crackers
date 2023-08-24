<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Order1Controller;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Slider;
use App\Models\AboutPage;
use App\Models\BankAccount;
use App\Settings\GeneralSettings;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return Inertia::render('Order');
// })->name('/');

Route::get('/', function () {
    return Inertia::render(
        'Home',
    [
        'slider' => Slider::all()
    ]
    );
})->name('home');



Route::get('/order', function (GeneralSettings $settings) {
    return Inertia::render(
        'Order',
        [   
            'products' => Product::all(),
            'orders' => Order::all(),
            'categories' => Category::with('products')->get(),
            'bank_details' => BankAccount::all(),

            'global_discount' => $settings->global_discount,
            'starting_year' => $settings->starting_year,
            'min_order_value' => $settings->min_order_value,
            'mobile_number_1' => $settings->mobile_number_1,
            'mobile_number_2' => $settings->mobile_number_2,
            'mobile_number_3' => $settings->mobile_number_3,
            'mobile_number_4' => $settings->mobile_number_4,
            'mobile_number_5' => $settings->mobile_number_5,
            'marquee_content' => $settings->marquee_content,
            'company_address' => $settings->company_address,

        ]
);
})->name('order');


// Route::post('/order', function () {
//     return Inertia::render(
//         'Order'
//     );

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/admin/orders/{id}/print', [OrderController::class, 'printOrder'])->name('admin.orders.print');
Route::get('/admin/orders/{id}/download', [OrderController::class, 'downloadOrder'])->name('admin.orders.download' );

Route::get('/thankyou', function () {
    return Inertia::render('Thankyou',);
})->name('thankyou');

Route::get('/lars', function () {
    return Inertia::render('Lars',);
})->name('lars');

Route::get('/single_sound', function () {
    return Inertia::render('Single_Sound',);
})->name('single_sound');

Route::get('/atom_bomb', function () {
    return Inertia::render('Atom_Bomb',);
})->name('atom_bomb');

Route::get('/chakkra', function () {
    return Inertia::render('Chakkra',);
})->name('chakkra');

Route::get('/rocket', function () {
    return Inertia::render('Rocket',);
})->name('rocket');

Route::get('/flower_pots', function () {
    return Inertia::render('Flower_Pots',);
})->name('flower_pots');

Route::get('/bijili', function () {
    return Inertia::render('Bijili',);
})->name('bijili');

Route::get('/sparklers', function () {
    return Inertia::render('Sparklers',);
})->name('sparklers');






Route::get('/about', function (GeneralSettings $settings) {
    return Inertia::render(
        'About',[

            'about_page' => AboutPage::all(),
            // 'mobile_number_1' => $settings->mobile_number_1,
            // 'mobile_number_2' => $settings->mobile_number_2,
            // 'mobile_number_3' => $settings->mobile_number_3,
            // 'mobile_number_4' => $settings->mobile_number_4,
            // 'mobile_number_5' => $settings->mobile_number_5,
            // 'company_address' => $settings->company_address,

        ]
);
})->name('about');

Route::get('/product', function () {
    return Inertia::render('Product');
})->name('product');

Route::get('/collection', function () {
    return Inertia::render('Collection');
})->name('collection');

Route::get('/contact', function (GeneralSettings $settings) {
    return Inertia::render(
        'Contact',[
            'mobile_number_1' => $settings->mobile_number_1,
            'mobile_number_2' => $settings->mobile_number_2,
            'mobile_number_3' => $settings->mobile_number_3,
            'mobile_number_4' => $settings->mobile_number_4,
            'mobile_number_5' => $settings->mobile_number_5,
            'company_address' => $settings->company_address,

        ]
);
})->name('contact');

Route::post('/contact-form', [ContactController::class, 'saveContact'])->name('contact-form');


Route::get('/portfolio', function () {
    return Inertia::render('Portfolio');
})->name('portfolio');

Route::get('/orderlist1', function () {
    return Inertia::render('Orderlist1');
})->name('orderlist1');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';