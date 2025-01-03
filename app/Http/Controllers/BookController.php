<?php

namespace App\Http\Controllers;


use App\Models\Book;


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
