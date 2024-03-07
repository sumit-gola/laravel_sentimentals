<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProdutsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');
Route::get('/cart', function () {
    return view('frontend.pages.ecommerce.cart');
})->name('cart');
Route::get('/all-product', function () {
    return view('frontend.pages.ecommerce.products');
})->name('web.products');
Route::get('/checkout', function () {
    return view('frontend.pages.ecommerce.checkout');
})->name('checkout');
Route::get('/product-details', function () {
    return view('frontend.pages.home');
})->name('product.details');


Route::get('admin/login',[AuthController::class,'loginView'])->name('admin.login');
Route::post('admin/login',[AuthController::class,'login'])->name('admin.login');

Route::get('/signup',[AuthController::class,'registrationView'])->name('admin.signup');
Route::post('/signup',[AuthController::class,'registrationPost'])->name('admin.signup');

// Admin  Panel  Start From here //
Route::group(['prefix'=>'admin','middleware'=>'auth'], function () {    
    Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');

    
    Route::get('/dashboard',[AuthController::class,'viewDashboard'])->name('admin.dashboard');
    Route::get('/categories',[CategoriesController::class,'index'])->name('admin.categories');
    Route::post('/add-category',[CategoriesController::class,'addCategory'])->name('add.category');

    Route::get('/products',[ProdutsController::class,'create'])->name('admin.products');
    Route::post('/add-products',[ProdutsController::class,'store'])->name('add.products');
    Route::get('/all-products',[ProdutsController::class,'showallProducts'])->name('all.products');




    
});

Route::get('/all-product/{id}', [ProdutsController::class,'categoryProducts'])->name('products.byCategory');
Route::get('/product-details/{id}', [ProdutsController::class,'productDetails'])->name('products.details');

