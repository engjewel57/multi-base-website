<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\User\UserProfileController;

use App\Http\Controllers\Backend\Admin\Auth\LoginController as AdminLoginController;

use App\Http\Controllers\Backend\Admin\DashboardController;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

 Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'loginCheck'])->name('login');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout')->middleware('auth:admin');
    // Add other admin routes here
 
});

// Backend routes for user profile management




// Frontend routes


require __DIR__.'/auth.php';
 require __DIR__ . '/admin.php';
 require __DIR__ . '/user.php';
require __DIR__ . '/frontend.php';