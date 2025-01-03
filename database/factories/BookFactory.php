<?php

namespace Database\Factories;


use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;


class BookFactory extends Factory
{
	protected $model = Book::class;
	
	public function definition(): array
	{
		return [
				'title' => fake('vi_VN')
						->sentence(fake()->numberBetween(5, 12)),
				'description' => fake('vi_VN')
						->paragraph(fake()->numberBetween(30, 100)),
				'price' => fake()->randomFloat(0, 48, 144) * 10000,
				'quantity' => fake()->numberBetween(200, 5000),
				'cover' => 'https://content.packt.com/_/image/original/B19051/cover_image_large.jpg',
				'pages' => fake()->numberBetween(345, 876),
				'isbn' => fake()->unique()->isbn13(),
				'edition' => fake()->numberBetween(1, 5),
				'publication_date' => fake()->dateTimeBetween('-5 years', 'now')
											->format('Y-m-d'),
				
				'publisher_id' => Publisher::inRandomOrder()->first()->id,
		];
	}
}
