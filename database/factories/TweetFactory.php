<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    public function definition(): array
    {
        $id_users = User::all()->pluck('id')->toArray();
        return [
            'user_id' => fake()->randomElement($id_users),
            'content' => fake()->paragraph(2),
        ];
    }
}
