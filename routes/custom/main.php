<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('webpages.about');
})->name('about');

Route::get('/hostels', function () {
    return view('webpages.hostels');
})->name('hostels');

Route::get('/hostels/info', function () {
    return view('webpages.info');
})->name('info');

Route::get('/house', function () {
    return view('webpages.house');
})->name('house');

Route::get('/help', function () {
    return view('webpages.help');
})->name('help');

Route::get('/onboarding', function () {
    return view('webpages.onboarding');
})->name('onboarding');

Route::get('/contact', function () {
    return view('webpages.contact');
})->name('contact');

Route::get('/faqs', function () {
    return view('webpages.faqs');
})->name('faqs');

Route::get('/tos', function () {
    return view('webpages.tos');
})->name('tos');

Route::get('/privacy', function () {
    return view('webpages.privacy');
})->name('privacy');