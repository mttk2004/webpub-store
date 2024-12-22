<?php

namespace Database\Factories;


use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;


class DiscountFactory extends Factory
{
	protected $model = Discount::class;
	
	public function definition(): array
	{
		return [
				'name' => $this->faker->text(fake()->numberBetween(20, 50)),
				'description' => $this->faker->sentence(fake()->numberBetween(20, 50)),
				'type' => 'percentage', // hard code for now
				'value' => $this->faker->randomFloat(0, 05, 30),
				'start_date' => Carbon::now()->addDays(fake()->numberBetween(1, 7)),
				'end_date' => Carbon::now()->addDays(fake()->numberBetween(10, 30)),
				'min_purchase_amount' => $this->faker->randomFloat(0,300, 3000) * 1000,
				'max_discount_amount' => $this->faker->randomFloat(0, 50, 500) * 1000,
		];
	}
}
