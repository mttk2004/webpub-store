<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Address;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->count(30)
            ->has(Address::factory()->count(1))
            ->create();
    }
}
