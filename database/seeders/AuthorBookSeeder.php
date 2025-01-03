<?php

namespace Database\Seeders;


use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;


class AuthorBookSeeder extends Seeder
{
	public function run(): void
	{
		$authors = Author::all();
		$books = Book::all();
		
		foreach ($books as $book) {
			$book->authors()
				 ->attach($authors->random(rand(1, 3))->pluck('id')->toArray());
		}
	}
}
