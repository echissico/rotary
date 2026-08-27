<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/about-us', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');
Route::view('/events', 'events')->name('events');
Route::view('/news', 'news')->name('news');
Route::view('/contact', 'contact')->name('contact');
Route::view('/get-involved', 'get-involved')->name('get-involved');

Route::get('/lang/{locale}', LanguageController::class)->name('lang.switch');
