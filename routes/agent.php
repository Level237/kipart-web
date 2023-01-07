<?php

use App\Http\Controllers\Agent\auth\LoginController;
use App\Http\Controllers\Agent\auth\LogoutController;
use App\Http\Controllers\Agent\DashboardController;
use Illuminate\Support\Facades\Route;

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
Route::prefix('agent')->name('agent.')->group(function(){

    Route::get('login',[LoginController::class,'index'])->name('login');
    Route::post('login',[LoginController::class,'login'])->name('login');
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::post('logout',[LogoutController::class,'logout'])->name('logout');
});
