<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Service;
use \App\Models\Specialist;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceSpecialist>
 */
class ServiceSpecialistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $service = Service::inRandomOrder()->first();
        $specialist = $service->company()->specialists()->inRandomOrder()->first();
        return [
            'service_id' => $service->value('id'),
            'specialist_id' => $specialist->value('id'),
        ];
    }
}
