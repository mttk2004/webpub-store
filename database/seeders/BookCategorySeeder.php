<?php

namespace Database\Seeders;


use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;


class BookCategorySeeder extends Seeder
{
	public function run(): void
	{
		// a book can have multiple categories, one in languages, one in technology
		// or only one in a specific language or technology
		
		$books = Book::all();
		
		$languages = Category::languages()->get();
		$technologies = Category::technologies()->get();
		
		$books->each(function ($book) use ($languages, $technologies) {
			$book->categories()->attach(
					[
							$languages->random()->id,
							$technologies->random()->id,
					]
			);
		});
	}
}
