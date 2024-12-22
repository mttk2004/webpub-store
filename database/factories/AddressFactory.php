<?php

namespace Database\Factories;


use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;


class AddressFactory extends Factory
{
	protected $model = Address::class;
	
	public function definition(): array
	{
		return [
				'address_line_1' => $this->faker->address(),
				'address_line_2' => $this->faker->address(),
				'city' => $this->faker->city(),
				'phone' => $this->faker->phoneNumber(),
				'is_primary' => $this->faker->boolean(),
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
				
				'user_id' => User::factory(),
		];
	}
}
