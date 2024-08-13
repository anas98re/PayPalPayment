<?php

use App\Http\Controllers\PayPalPaymentController;
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
    return view('welcome');
});


Route::get('create-transaction', [PayPalPaymentController::class, 'createTransaction'])->name('createTransaction');
Route::post('process-transaction', [PayPalPaymentController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalPaymentController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalPaymentController::class, 'cancelTransaction'])->name('cancelTransaction');
