<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AuthLoginController;


// Pages Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/property', [PropertyController::class, 'index'])->name('property');
Route::get('/property/detail-property', [PropertyController::class, 'detailProperty'])->name('detailProperty');
Route::get('/agent', [AgentController::class, 'index'])->name('agent');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/detail-blog', [BlogController::class, 'DetailBlog'])->name('DetailBlog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Auth Route
Route::get('/register', [AuthLoginController::class, 'register'])->name('register');
Route::get('/login', [AuthLoginController::class, 'Login'])->name('Login');

