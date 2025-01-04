<?php

use App\Http\Controllers\BackPanel\AboutusController;
use App\Http\Controllers\BackPanel\AuthController;
use App\Http\Controllers\BackPanel\BranchController;
use App\Http\Controllers\BackPanel\DonationController;
use App\Http\Controllers\BackPanel\EventController;
use App\Http\Controllers\BackPanel\NewsController;
use App\Http\Controllers\BackPanel\OurTeamController;
use App\Http\Controllers\BackPanel\SliderController;
use App\Http\Controllers\FrontPanel\ContactController;
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

        Route::group(['prefix' => 'branch'], function () {
            Route::any('/', [BranchController::class, 'index'])->name('admin.branch');
            Route::any('/form', [BranchController::class, 'form'])->name('admin.branch.form');
            Route::post('/save', [BranchController::class, 'save'])->name('admin.branch.save');
            Route::post('/delete', [BranchController::class, 'delete'])->name('admin.branch.delete');
        });
        Route::group(['prefix' => 'donation'], function () {
            Route::any('/', [DonationController::class, 'index'])->name('admin.donation');
            Route::any('/form', [DOnationController::class, 'form'])->name('admin.donation.form');
            Route::post('/save', [DonationController::class, 'save'])->name('admin.donation.save');
            Route::post('/delete', [DonationController::class, 'delete'])->name('admin.donation.delete');
        });
        Route::group(['prefix' => 'ourteam'], function () {
            Route::any('/', [OurTeamController::class, 'index'])->name('admin.ourteam');
            Route::any('/form', [OurTeamController::class, 'form'])->name('admin.ourteam.form');
            Route::post('/save', [OurTeamController::class, 'save'])->name('admin.ourteam.save');
            Route::post('/delete', [OurTeamController::class, 'delete'])->name('admin.ourteam.delete');
        });

        Route::group(['prefix' => 'slider'], function () {
            Route::any('/', [SliderController::class, 'index'])->name('admin.slider');
            Route::any('/form', [SliderController::class, 'form'])->name('admin.slider.form');
            Route::post('/save', [SliderController::class, 'save'])->name('admin.slider.save');
            Route::post('/delete', [SliderController::class, 'delete'])->name('admin.slider.delete');
        });
        Route::group(['prefix' => 'event'], function () {
            Route::any('/', [EventController::class, 'index'])->name('admin.event');
            Route::any('/form', [EventController::class, 'form'])->name('admin.event.form');
            Route::post('/save', [EventController::class, 'save'])->name('admin.event.save');
            Route::post('/delete', [EventController::class, 'delete'])->name('admin.event.delete');
        });
        Route::group(['prefix' => 'news'], function () {
            Route::any('/', [NewsController::class, 'index'])->name('admin.news');
            Route::any('/form', [NewsController::class, 'form'])->name('admin.news.form');
            Route::post('/save', [NewsController::class, 'save'])->name('admin.news.save');
            Route::post('/delete', [NewsController::class, 'delete'])->name('admin.news.delete');
        });

        Route::group(['prefix' => 'contact'], function () {
            Route::any('/', [ContactController::class, 'index'])->name('admin.contact');
            Route::post('/delete', [ContactController::class, 'delete'])->name('admin.contact.delete');
        });

        Route::group(['prefix' => 'aboutus'], function () {
            Route::any('/', [AboutusController::class, 'index'])->name('admin.aboutus');
            Route::post('/updateaboutus', [AboutusController::class, 'updateAboutus'])->name('admin.aboutus.updateaboutus');
        });
    });
});


//end back panel

// Route::middleware('guest')->group(function () {
//front data fetch-start

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/message', [FrontController::class, 'messageDetail'])->name('home.detail');
Route::get('/about', [FrontController::class, 'aboutUs'])->name('about');

Route::get('/donation', [FrontController::class,'donation'])->name('donation');
Route::get('/donation/{slug}', [FrontController::class,'detail'])->name('donation.detail');
Route::get('/mission/detail', [FrontController::class, 'missionDetail'])->name('mission.detail');

Route::get('/gallery', function () {
    sleep(1);
    return Inertia::render('Gallery');
})->name('gallery');

Route::get('/event', [FrontController::class,'event'])->name('event');
Route::get('/event/{slug}', [FrontController::class,'eventDetail'])->name('event.detail');

Route::get('/news', [FrontController::class,'news'])->name('news');
Route::get('/news/{slug}', [FrontController::class,'newsDetail'])->name('news.detail');

Route::get('/contactus', function () {
    sleep(1);
    return Inertia::render('ContactUs');
})->name('contactus');
//front data fetch-start
// });
// Route::inertia('/about', 'About')->name('about');

Route::post('/sendmessage', [ContactController::class, 'save'])->name('contact.save');