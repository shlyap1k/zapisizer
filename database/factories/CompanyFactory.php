<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Specialization;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->value('id'),
            'specialization_id' => Specialization::inRandomOrder()->value('id'),
            'name' => fake()->company(),
            'description' => fake()->catchPhrase()
        ];
    }
}
