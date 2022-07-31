<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NagadController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create-payment', [NagadController::class, 'createPayment'])->name('create-payment');
Route::get("/nagad-payment/success", [NagadPaymentController::class, "success"]);
Route::get("/nagad-payment/fail", [NagadPaymentController::class, "fail"]);