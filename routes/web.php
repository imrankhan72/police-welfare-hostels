<?php

use App\Http\Controllers\ProfileController;
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

Route::view('/','website.index')->name('home');
Route::view('/about-us','website.about-us')->name('about-us');
Route::view('/management-committee','website.management-committee')->name('management-committee');
Route::view('/hostels','website.hostels')->name('hostels');
Route::view('/facilities','website.facilities')->name('facilities');
Route::view('/eligibility','website.eligibility')->name('eligibility');
Route::view('/rules-regulations','website.rules-regulations')->name('rules-regulations');
Route::view('/gallery','website.gallery')->name('gallery');
Route::view('/faqs','website.faqs')->name('faqs');
Route::view('/contact-us','website.contact-us')->name('contact-us');
Route::view('/apply-now','website.apply-now')->name('apply-now');




//Admin Routes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
