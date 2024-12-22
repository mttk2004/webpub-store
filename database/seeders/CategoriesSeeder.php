<?php

namespace Database\Seeders;


use DB;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\table;


class CategoriesSeeder extends Seeder
{
	public function run(): void
	{
		DB::table('categories')->insert(
				[
						'name' => 'Ngôn ngữ',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
				
		);
		
		DB::table('categories')->insert(
				[
						'name' => 'Công nghệ',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10000,
						'name' => 'JavaScript',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10000,
						'name' => 'PHP',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10000,
						'name' => 'Python',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10000,
						'name' => 'Java',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10000,
						'name' => 'C#',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10000,
						'name' => 'Ruby',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10000,
						'name' => 'TypeScript',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'React',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'Vue',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'Angular',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'NodeJS',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'Laravel',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'Django',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'Spring',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'ASP.NET',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'Ruby on Rails',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
		
		DB::table('categories')->insert(
				[
						'parent_id' => 10001,
						'name' => 'Spring Boot',
						'description' => fake()->sentence(fake()->numberBetween(20, 50)),
				],
		);
	}
}
