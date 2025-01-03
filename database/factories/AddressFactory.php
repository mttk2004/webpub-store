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
				'address_line_1' => fake('vi_VN')->streetAddress(),
				'city' => fake('vi_VN')->city(),
				'phone' => fake()->regexify('0[35789][0-9]{8}'),
				'is_primary' => true,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
				
				'user_id' => User::factory(),
		];
	}
}
