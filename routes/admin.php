<?php

use App\Http\Controllers\Admin\auth\loginController;
use App\Http\Controllers\Admin\auth\LogoutController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('login',[loginController::class,'index']);

    Route::post('login',[loginController::class,'login'])->name('login');

    Route::middleware(['admin'])->group(function(){

    });
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::post('logout',[LogoutController::class,'logout'])->name('logout');
});
