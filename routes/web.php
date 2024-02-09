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
    return view('auth.login');
})->name('login');

// Route::get('customer', function () {
//     return view('customer');
// });

// Route::get('/customer-insight', function () {
//     return view('customer-insight');
// });

// Route::get('/invoices', function () {
//     return view('invoices');
// });



Route::group(['middleware' => 'auth'], function () {
    Route::get('salesDashboard', function () {
        return view('salesDashboard');
    });
    // Route::get('customer',function()
    // {
    //     return view('customer');
    // });
    Route::get('/customer', [App\Http\Controllers\HomeController::class, 'index'])->name('customer.ui');
    Route::post('/send/customer', [CustomerController::class, 'send'])->name('user.customer');
    Route::get('customer-insight', function () {
        return view('customer-insight');
    });
    Route::get('invoices', function () {
        return view('invoices');
    });
});

Auth::routes();


