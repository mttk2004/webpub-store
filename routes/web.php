<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home'])->name('home');
Auth::routes();

Route::group(['middleware' => 'guest_or_customer'], function () {
	// Hiển thị sách và thể loại
	Route::resource('books', BookController::class)->only(['show']);
	Route::resource('categories', CategoryController::class)->only(['show']);
});

Route::group(['middleware' => 'customer'], function () {
	// Thêm sách vào giỏ hàng
	Route::post('cart/{book}', [BookController::class, 'addToCart'])
		 ->name('cart.add');
});
