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
				'average_rating' => $this->faker->randomFloat(),
				'total_sold' => $this->faker->randomNumber(),
				'total_view' => $this->faker->randomNumber(),
				'total_revenue' => $this->faker->randomFloat(),
				'last_ordered_at' => Carbon::now(),
				
				'book_id' => Book::factory(),
		];
	}
}
