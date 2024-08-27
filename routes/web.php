<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\RefundAdminController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/profile', function(){
    return view('Admin.profile.index');
});

Route::resource('refund',RefundAdminController::class);
Route::resource('user',AccountController::class);
Route::resource('setting',SettingController::class);