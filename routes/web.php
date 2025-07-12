<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::view('/', 'home')->name('home');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    dd($request->all());
    // For now, just log or dump the message (later, send mail)
    // Mail::to('info@danixsolutions.com')->send(new ContactMail(...));

    return back()->with('success', 'Your message has been sent successfully!');
})->name('contact.store');
