<?php

use Illuminate\Support\Facades\Route;

// Main test page with all components
Route::get('/', function () {
    return view('test');
});

// Individual component test pages
Route::get('/button', function () {
    return view('components.button');
});

Route::get('/alert', function () {
    return view('components.alert');
});

Route::get('/badge', function () {
    return view('components.badge');
});

Route::get('/card', function () {
    return view('components.card');
});

Route::get('/input', function () {
    return view('components.input');
});

Route::get('/breadcrumb', function () {
    return view('components.breadcrumb');
});

Route::get('/select', function () {
    return view('components.select');
});
