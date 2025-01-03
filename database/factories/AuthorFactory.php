<?php

namespace Database\Factories;


use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;


class AuthorFactory extends Factory
{
	protected $model = Author::class;
	
	public function definition(): array
	{
		return [
				'name' => fake('vi_VN')->firstName
						. ' ' . fake('vi_VN')->lastName,
				'description' => fake('vi_VN')
						->paragraph(fake()->numberBetween(30, 100)),
		];
	}
}
