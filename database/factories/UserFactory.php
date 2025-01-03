<?php

namespace Database\Factories;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;


class UserFactory extends Factory
{
	protected $model = User::class;
	
	public function definition(): array
	{
		$randomTime = $this->faker->dateTimeBetween('-1 year');
		
		return [
				'first_name' => fake('vi_VN')->firstName(),
				'last_name' => fake('vi_VN')->lastName(),
				'email' => fake('vi_VN')->unique()->safeEmail(),
				'password' => bcrypt('password'),
				'email_verified_at' => Carbon::now(),
				'remember_token' => Str::random(10),
				'created_at' => $randomTime,
				'updated_at' => $randomTime,
		];
	}
}
