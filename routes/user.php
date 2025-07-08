<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\User\UserProfileController;

Route::group(['middleware' => ['auth:web'], 'prefix'=> 'user', 'as'=>'user.'], function () {
    Route::get('/user-app', [UserProfileController::class, 'userApp'])->name('user.app');
   
});