<?php

namespace Database\Seeders;


use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Seeder;


class CartsSeeder extends Seeder
{
	public function run(): void
	{
		$allUsers = User::all();
		
		$allUsers->each(function (User $user) {
			Cart::factory()->create([
					'user_id' => $user->id,
			]);
		});
	}
}
