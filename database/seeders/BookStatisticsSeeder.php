<?php

namespace Database\Seeders;


use App\Models\Book;
use App\Models\BookStatistic;
use Illuminate\Database\Seeder;


class BookStatisticsSeeder extends Seeder
{
	public function run(): void
	{
		$allBooks = Book::all();
		
		$allBooks->each(function (Book $book) {
			BookStatistic::factory()->create([
					'book_id' => $book->id,
			]);
		});
	}
}
