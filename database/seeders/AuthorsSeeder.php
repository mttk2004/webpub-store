<?php

namespace Database\Seeders;


use App\Models\Author;
use Illuminate\Database\Seeder;


class AuthorsSeeder extends Seeder
{
	public function run(): void
	{
		Author::factory()->count(5)->create();
	}
}
