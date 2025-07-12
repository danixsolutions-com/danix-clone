<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    // For now, just log or dump the message (later, send mail)
    // Mail::to('info@danixsolutions.com')->send(new ContactMail(...));

    return back()->with('success', 'Your message has been sent successfully!');
})->name('contact.submit');
