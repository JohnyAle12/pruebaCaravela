<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::get('/user/verify', [HomeController::class, 'userVerify'])->name('user.verify');
});

Route::middleware(['auth', 'checkactive'])->group(function () {//
	Route::get('/home', [HomeController::class, 'index'])->name('home');
	Route::resource('facturas', InvoiceController::class)->names('invoce');
});




