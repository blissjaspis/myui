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

Route::get('/checkbox', function () {
    return view('components.checkbox');
});

Route::get('/switch', function () {
    return view('components.switch');
});

Route::get('/popover', function () {
    return view('components.popover');
});

Route::get('/dialog', function () {
    return view('components.dialog');
});

Route::get('/sheet', function () {
    return view('components.sheet');
});

Route::get('/tabs', function () {
    return view('components.tabs');
});

Route::get('/sonner', function () {
    return view('components.sonner');
});

Route::get('/accordion', function () {
    return view('components.accordion');
});

Route::get('/tooltip', function () {
    return view('components.tooltip');
});

Route::get('/button-group', function () {
    return view('components.button-group');
});

Route::get('/dropdown', function () {
    return view('components.dropdown');
});

Route::get('/avatar', function () {
    return view('components.avatar');
});
