<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/about-us', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');
Route::view('/events', 'events')->name('events');
Route::view('/news', 'news')->name('news');
Route::view('/contact', 'contact')->name('contact');
Route::view('/get-involved', 'get-involved')->name('get-involved');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'pt'])) {
        session(['locale' => $locale]);
    }
    return back();
})->name('lang.switch');
