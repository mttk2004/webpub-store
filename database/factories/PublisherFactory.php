<?php

namespace Database\Factories;


use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;


class PublisherFactory extends Factory
{
	protected $model = Publisher::class;
	
	public function definition(): array
	{
		return [
				'name' => fake('vi_VN')->company(),
				'description' => fake('vi_VN')
						->sentence(fake()->numberBetween(150, 300)),
		];
	}
}
