<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/portfolio-details/{id}', function ($id) {
    return view('portfolio-details', ['id' => $id]);
});

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services/{service}', function ($service) {
    return view('service-details', ['service' => $service]);
})->name('service.details');
