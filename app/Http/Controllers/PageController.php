<?php

namespace App\Http\Controllers;


use App\Models\Book;


class PageController extends Controller
{
	public function home()
	{
		$latestBooks = Book::latest('publication_date')->take(10)->get();
		return view('home', compact('latestBooks'));
	}
}
