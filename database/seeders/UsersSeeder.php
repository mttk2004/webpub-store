<?php

namespace Database\Seeders;


use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;


class UsersSeeder extends Seeder
{
	public function run(): void
	{
		User::factory(30)->has(Address::factory())->create();
	}
}
