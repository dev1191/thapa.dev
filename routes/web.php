<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;





Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/projects', [IndexController::class, 'project'])->name('projects');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::post('/contact-store', [IndexController::class, 'storeContact'])->name('contact.store');
