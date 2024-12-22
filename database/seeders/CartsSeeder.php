<?php

namespace Database\Seeders;


use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Seeder;


class CartsSeeder extends Seeder
{
	public function run(): void
	{
		// one cart for each user
		$users = User::all();
		
		foreach ($users as $user) {
			Cart::factory()->create(['user_id' => $user->id]);
		}
	}
}
