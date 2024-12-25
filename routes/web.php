<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Guest\BookController;
use App\Http\Controllers\Guest\CategoryController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');

Route::group(['middleware' => 'guest'], function () {
	// Đăng nhập và đăng ký
	Auth::routes();
	
	// Hiển thị sách và thể loại
	Route::resource('books', BookController::class)->only(['index', 'show']);
	Route::resource('categories', CategoryController::class)->only(['index', 'show']);
	
	// Authentication
	Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
	Route::post('login', [LoginController::class, 'login']);
	
	// Registration
	Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
	Route::post('register', [RegisterController::class, 'register']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
