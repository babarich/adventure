<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/404', [PageController::class, 'found'])->name('found');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/coming', [PageController::class, 'coming'])->name('coming');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/destination', [PageController::class, 'destination'])->name('destination');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');