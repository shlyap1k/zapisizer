<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;
use App\Models\User;
use App\Models\Specialist;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $service = Service::has('specialist')->inRandomOrder()->first();
        // $specialist = $service->specialist;
        $specialist = Specialist::has('services')->inRandomOrder()->first();
        $service = $specialist->services->first();
        // dd($service);
        return [
            'specialist_id' => $specialist->value('id'),
            'user_id' => User::inRandomOrder()->value('id'),
            'service_id' => $service->value('id'),
            'date' => fake()->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            'time' => fake()->time($format = 'H:i:s', $max = '17:00:00', $min = '08:00:00') // '20:49:42'
        ];
    }
}
