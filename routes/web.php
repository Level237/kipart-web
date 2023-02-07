<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\User\auth\LoginController;
use App\Http\Controllers\User\auth\LogoutController;

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

Route::get('/',[HomePageController::class,'homepage'])->name('homepage');

Route::post('login',[LoginController::class,'login'])->name('login');
Route::post('logout',[LogoutController::class,'logout'])->name('logout');
