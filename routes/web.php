<?php

use App\Http\Controllers\BackPanel\AuthController;
use App\Http\Controllers\BackPanel\DonationController;
use App\Http\Controllers\FrontPanel\FrontController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//start back panel


Route::get('/login', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::post('/admin/login', [AuthController::class, 'loginUser'])->name('admin.login');

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::post('/logout', [AuthController::class, 'logoutUser'])->name('admin.logout');

        Route::get('/dashboard', function () {
            return Inertia::render('BackPanel/Dashboard/Dashboard');
        })->name('admin.dashboard');

        Route::group(['prefix' => 'donation'], function () {
            Route::any('/', [DonationController::class, 'index'])->name('admin.donation');
            Route::any('/form', [DOnationController::class, 'form'])->name('admin.donation.form');
            Route::post('/save', [DonationController::class, 'save'])->name('admin.donation.save');
            Route::post('/delete', [DonationController::class, 'delete'])->name('admin.donation.delete');
        });
    });
});


//end back panel

// Route::middleware('guest')->group(function () {
//front data fetch-start
Route::get('/', function () {
    sleep(1);
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    sleep(1);
    return Inertia::render('About');
})->name('about');

Route::get('/donation', [FrontController::class,'donation'])->name('donation');
Route::get('/donation/{slug}', [FrontController::class,'detail'])->name('donation.detail');

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
//front data fetch-start
// });
// Route::inertia('/about', 'About')->name('about');
