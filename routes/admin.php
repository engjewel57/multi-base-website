<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\Backend\Admin\Auth\LoginController as AdminLoginController;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'loginCheck'])->name('login');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout')->middleware('auth:admin');
    // Add other admin routes here
 
});



Route::group(['middleware' => ['auth:admin'], 'prefix'=> 'admin', 'as'=>'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'deshboard'])->name('dashboard');
   
});