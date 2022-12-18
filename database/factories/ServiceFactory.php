<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_id' => \App\Models\Company::inRandomOrder()->value('id'),
            'service_type_id' => \App\Models\ServiceType::inRandomOrder()->value('id'),
            'duration' => fake()->time(),
            'price' => fake()->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'forSeveralPeople' => fake()->boolean(),
            'cooldown' => fake()->time(),
            'description' => fake()->catchPhrase(),
            'name' => fake()->jobTitle()
        ];
    }
}
