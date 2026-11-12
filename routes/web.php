<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/solutions', 'pages.solutions')->name('solutions');
Route::view('/services', 'pages.services')->name('services');
Route::view('/dealers', 'pages.dealers')->name('dealers');
Route::view('/contact', 'pages.contact')->name('contact');
