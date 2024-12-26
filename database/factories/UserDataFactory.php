<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserData>
 */
class UserDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            'phone_number' => fake()->phoneNumber(),
            'Designation' => fake()->text(20),
            'about_user' => fake()->paragraph(),
            'facebook_url' => fake()->url(),
            'twitter_url' => fake()->url(),
            'linkedin_url' => fake()->url(),
            'profile_picture' => fake()->imageUrl(),
        ];
    }
}
