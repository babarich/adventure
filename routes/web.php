<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MangementController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/404', [PageController::class, 'found'])->name('found');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/coming', [PageController::class, 'coming'])->name('coming');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/book', [PageController::class, 'book'])->name('book');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/destination', [PageController::class, 'destination'])->name('destination');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::post('/store', [PageController::class, 'store'])->name('store');


Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => 'auth'], function (){

    Route::group(['prefix' => 'managements'], function (){
        Route::name('manage.')->group(function (){
            Route::controller(MangementController::class)->group(function (){
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::post('update/{id?}', 'update')->name('update');
                Route::get('edit/{id?}', 'edit')->name('edit');
                Route::post('reassign/{id?}', 'reassign')->name('reassign');
                Route::get('show/{id?}', 'show')->name('show');
                Route::post('delete/{id?}', 'delete')->name('delete');
                Route::post('upload_customer_report', 'uploadCustomer')->name('upload');
            });
        });
    });

 Route::group(['prefix' => 'bookings'], function (){
        Route::name('booking.')->group(function (){
            Route::controller(BookingController::class)->group(function (){
                Route::get('index', 'index')->name('index');
            });
        });
    });



});

require __DIR__.'/auth.php';
