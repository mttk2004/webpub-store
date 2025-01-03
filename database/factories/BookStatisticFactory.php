<?php

namespace Database\Factories;


use App\Models\Book;
use App\Models\BookStatistic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;


class BookStatisticFactory extends Factory
{
	protected $model = BookStatistic::class;
	
	public function definition(): array
	{
		return [
				'book_id' => Book::factory(),
		];
	}
}
