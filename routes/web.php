<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', function (Request $request) {
    dd($request->all());
})->name('contact-form');