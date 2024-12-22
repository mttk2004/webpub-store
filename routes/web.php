<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Guest\BookController;
use App\Http\Controllers\Guest\CategoryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::group(['middleware' => 'guest'], function () {
	// Hiển thị sách và thể loại
	Route::resource('books', BookController::class)->only(['index', 'show']);
	Route::resource('categories', CategoryController::class)->only(['index', 'show']);
	
	// Đăng ký
	Route::get('/register', [RegisterController::class, 'index'])->name('register');
	Route::post('/register', [RegisterController::class, 'register']);
	
	// Đăng nhập
	Route::get('/login', [LoginController::class, 'index'])->name('login');
	Route::post('/login', [LoginController::class, 'login']);
});
