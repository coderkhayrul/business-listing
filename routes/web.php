<?php

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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//<- ----- Business Listing Route ------ ->
Route::resource('/listing', ListingController::class);

//<- ------ Dashboard Route ------ ->
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
