<?php

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
});
