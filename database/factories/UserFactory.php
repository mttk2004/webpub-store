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
		return [
				'role' => 'customer', // only customer for now
				'first_name' => fake('vi_VN')->firstName(),
				'last_name' => fake('vi_VN')->lastName(),
				'email' => $this->faker->unique()->safeEmail(),
				'password' => bcrypt('password'),
				'avatar' => ' https://ui-avatars.com/api/?name=Web+Pub',
				'email_verified_at' => Carbon::now(),
				'remember_token' => Str::random(10),
		];
	}
}
