<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
// Home - should load testimonials dynamically
Route::get('/', [TestimonialController::class, 'index'])->name('home');

// Static Pages
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

// Dynamic Pages
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/team', [TeamController::class, 'index'])->name('team');

// Contact Form Submission
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');



Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return 'Cleared!';
});

// In web.php (TEMP ONLY)
Route::get('/fix-config', function () {
    \Artisan::call('config:clear');
    \Artisan::call('config:cache');
    return 'done';
});
