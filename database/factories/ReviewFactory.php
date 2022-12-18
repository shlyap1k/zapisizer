<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tables_from = [
            [
                'table' => 'User',
                'model_id' => \App\Models\User::inRandomOrder()->value('id')
            ],
            [
                'table' => 'Specialist',
                'model_id' => \App\Models\Specialist::inRandomOrder()->value('id')
            ],
            [
                'table' => 'Company',
                'model_id' => \App\Models\Company::inRandomOrder()->value('id')
            ]
        ];

        $tables_to = [
            [
                'table' => 'Specialist',
                'model_id' => \App\Models\Specialist::inRandomOrder()->value('id')
            ],
            [
                'table' => 'Company',
                'model_id' => \App\Models\Company::inRandomOrder()->value('id')
            ],
            [
                'table' => 'Service',
                'model_id' => \App\Models\Service::inRandomOrder()->value('id')
            ]
            ];
        $table_from = $tables_from[array_rand($tables_from, 1)];
        $table_to = $tables_to[array_rand($tables_to)];
        return [
            'reviewable_type' => $table_from['table'],
            'reviewable_id' => $table_from['model_id'],
            'reviewer_type' => $table_to['table'],
            'reviewer_id' => $table_to['model_id'],
            'rating' => fake()->randomDigit,
            'text' =>fake()->realText($maxNbChars = 200)
        ];
    }
}
