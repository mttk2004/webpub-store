<?php

namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
	public function index()
	{
		
		return view('books.index', ['books' => Book::all()]);
	}
	
	public function show($id) {
		return view('books.show', ['book' => Book::findOrFail($id)]);
	}
}
