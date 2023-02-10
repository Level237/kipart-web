<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\public\SearchController;
use App\Http\Controllers\User\auth\LoginController;
use App\Http\Controllers\User\auth\LogoutController;
use App\Http\Controllers\public\ListAgencyController;
use App\Http\Controllers\Passengers\AddPassengerController;
use App\Http\Controllers\payments\stripe\PaymentWithStripeController;
use App\Http\Controllers\test\payments\stripe\TestPaymentController;

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
Route::get('login',[LoginController::class,'index'])->name('go-to-login');


Route::post('add-passenger',[AddPassengerController::class,'add'])->name('add-passenger');
Route::post('logout',[LogoutController::class,'logout'])->name('logout');

Route::post('step-one/choice-your-agency',[SearchController::class,'stepOne'])->name('search.step-one');
Route::post('step-two/choice-your-sub-agency',[SearchController::class,'stepTwo'])->name('search.step-two');
Route::post('step-tree/choice-your-travel',[SearchController::class,'stepThree'])->name('search.step-three');
Route::get('step-four/add-passengers',[AddPassengerController::class,'index'])->name('goto-passenger');
Route::get('step-five/payment-review',[PaymentWithStripeController::class,'stepOne'])->name('payment-review');
Route::post('step-six/payment-final',[PaymentWithStripeController::class,'stepTwo'])->name('payment-final');
Route::post('step-final/pay',[TestPaymentController::class,'testPayment'])->name('pay');
Route::get('list/agencyByPath/{departure}/{arrival}',[ListAgencyController::class,'ListAgencyWithPath'])->name('list.agencyByPath');
