<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fakeDateTime = fake()->dateTimeThisYear->format('Y-m-d H:i:s');
        return [
            'role' => 'customer',
            'first_name' => fake('vi_VN')->firstName(),
            'last_name' => fake('vi_VN')->lastName(),
            'email' => fake('vi_VN')->unique()->safeEmail(),
            'phone' => fake()->regexify('0[35789][0-9]{8}'),
            'password' => static::$password ??= Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => $fakeDateTime,
            'updated_at' => $fakeDateTime,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
