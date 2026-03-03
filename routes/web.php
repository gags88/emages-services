<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

// Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
