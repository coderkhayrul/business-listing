<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListingController;
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

//<- ------ ROOT ROUTE ------ ->
Route::get('/',[ListingController::class, 'index']);

Auth::routes();

//<- ----- Business Listing Route ------ ->
Route::resource('/listing', ListingController::class);

//<- ------ Dashboard Route ------ ->
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');