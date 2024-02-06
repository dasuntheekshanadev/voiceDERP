<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('customer');
});

Route::get('/customer-insight', function () {
    return view('customer-insight');
});

Route::get('/invoices', function () {
    return view('invoices');
});

Route::post('/send/customer',[CustomerController::class,'send'])->name('user.customer');