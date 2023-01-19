<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });



// desktop
Route::resource('/', App\Http\Controllers\Desktop\HomeController::class);
Route::resource('/suites-villas', App\Http\Controllers\Desktop\VillaController::class);
Route::resource('/experiences', App\Http\Controllers\Desktop\ExperienceController::class);
Route::resource('/dining', App\Http\Controllers\Desktop\DiningController::class);
Route::resource('/spa', App\Http\Controllers\Desktop\SpaController::class);
Route::resource('/weddings', App\Http\Controllers\Desktop\WeddingController::class);



// mobile
Route::resource('/m', App\Http\Controllers\Mobile\HomeController::class);
