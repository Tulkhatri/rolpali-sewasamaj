<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//start back panel


Route::get('/admin/dashboard',function(){
    return Inertia::render('BackPanel/Dashboard/Dashboard');
})->name('admin.dashboard');


Route::get('/admin/donation',function(){
    return Inertia::render('BackPanel/Donation/Donation');
})->name('admin.donation');

//end back panel

Route::get('/', function () {
    sleep(1);
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    sleep(1);
    return Inertia::render('About');
})->name('about');

Route::get('/donation', function () {
    sleep(1);
    return Inertia::render('Donation');
})->name('donation');

Route::get('/gallery', function () {
    sleep(1);
    return Inertia::render('Gallery');
})->name('gallery');

Route::get('/event', function () {
    sleep(1);
    return Inertia::render('Event');
})->name('event');

Route::get('/news', function () {
    sleep(1);
    return Inertia::render('News');
})->name('news');

Route::get('/contactus', function () {
    sleep(1);
    return Inertia::render('ContactUs');
})->name('contactus');

// Route::inertia('/about', 'About')->name('about');
