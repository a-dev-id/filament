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
Route::resource('/gallery', App\Http\Controllers\Desktop\GalleryController::class);
Route::resource('/contact-us', App\Http\Controllers\Desktop\ContactController::class);
Route::resource('/offers', App\Http\Controllers\Desktop\OfferController::class);
Route::resource('/honeymoon', App\Http\Controllers\Desktop\HoneymoonController::class);

Route::resource('/story', App\Http\Controllers\Desktop\StoryController::class);
Route::resource('/awards', App\Http\Controllers\Desktop\AwardController::class);
Route::resource('/videos', App\Http\Controllers\Desktop\VideoController::class);
Route::resource('/day-guest', App\Http\Controllers\Desktop\DayGuestController::class);
Route::resource('/blog', App\Http\Controllers\Desktop\BlogController::class);
Route::resource('/careers', App\Http\Controllers\Desktop\CareerController::class);
Route::resource('/virtual-tour', App\Http\Controllers\Desktop\VirtualTourController::class);



// mobile
Route::resource('/m', App\Http\Controllers\Mobile\HomeController::class);
