<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/history', [HomeController::class, 'history'])->name('history');
Route::get('/partners', [HomeController::class, 'partners'])->name('partners');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');


Route::post('/apply', [HomeController::class, 'apply'])->name('apply');
