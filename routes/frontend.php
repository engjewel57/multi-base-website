<?php
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['as'=>'fn.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/product', [HomeController::class, 'product'])->name('product');
    Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
    Route::get('/shipping-address', [HomeController::class, 'shippingAddress'])->name('shipping.address');
});