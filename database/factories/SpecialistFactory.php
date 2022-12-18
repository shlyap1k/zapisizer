<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;
use \App\Models\Specialization;
use \App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialist>
 */
class SpecialistFactory extends Factory
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
            'company_id' => Company::inRandomOrder()->value('id'),
            'specialization_id' => Specialization::inRandomOrder()->value('id'),
            'start_date' => fake()->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null)
        ];
    }
}
