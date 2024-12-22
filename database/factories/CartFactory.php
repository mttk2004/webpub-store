<?php

namespace Database\Factories;


use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;


class CartFactory extends Factory
{
	protected $model = Cart::class;
	
	public function definition(): array
	{
		return [
				'total_amount' => 0,
		];
	}
}
