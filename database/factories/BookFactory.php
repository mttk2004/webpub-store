<?php

namespace Database\Factories;


use App\Models\Book;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;


class BookFactory extends Factory
{
	protected $model = Book::class;
	
	public function definition(): array
	{
		return [
				'title' => $this->faker->sentence(fake()->numberBetween(8, 20)),
				'description' => $this->faker->sentence(fake()->numberBetween(300, 500)),
				'price' => $this->faker->randomFloat(0, 30, 100) * 10000,
				'quantity' => $this->faker->numberBetween(200, 10000),
				'cover' => 'https://content.packt.com/_/image/original/B19051/cover_image_large.jpg',
				'pages' => $this->faker->numberBetween(234, 987),
				'isbn' => $this->faker->unique()->isbn13(),
				'edition' => $this->faker->numberBetween(1, 5),
				'publication_date' => $this->faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
				
				'category_id' => $this->faker->numberBetween(10002, 10018),
				'publisher_id' => Publisher::inRandomOrder()->first()->id,
				'discount_id' => Discount::inRandomOrder()->first()->id,
		];
	}
}
