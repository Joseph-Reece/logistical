<?php

use App\Http\Controllers\PagesController;
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
//     return view('pages.index');
// });

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/about', function () {
     return view('pages.about');
})->name('about');

Route::get('/why-we-exist', function () {
     return view('pages.why-we-exist');
})->name('why_we_exist');

Route::get('/our-business', function () {
     return view('pages.our-business');
})->name('our-business');

Route::get('/contact-us', function () {
     return view('pages.contact');
})->name('contact');
