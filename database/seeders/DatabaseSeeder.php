<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Specialization::factory(10)->create();
        \App\Models\Company::factory(10)->has(\App\Models\Specialist::factory()->count(3)
        ->state(function (array $attributes,  \App\Models\Company $company) {
            return ['company_id' => $company->id];
        }))->create();
        
        // \App\Models\ServiceType::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
        ]);

        \App\Models\ServiceType::create([
            'name' => 'Парикмахерская'
        ]);

        \App\Models\ServiceType::create([
            'name' => 'Автосервис'
        ]);
        
        \App\Models\ServiceType::create([
            'name' => 'Ресторан'
        ]);

        \App\Models\ServiceType::create([
            'name' => 'Спортзал'
        ]);

        \App\Models\ServiceType::create([
            'name' => 'Ремонт электроники'
        ]);

        \App\Models\ServiceType::create([
            'name' => 'Строительство'
        ]);

        \App\Models\ServiceType::create([
            'name' => 'Репетиторство'
        ]);
        
        \App\Models\ServiceType::create([
            'name' => 'Уборка'
        ]);

        \App\Models\ServiceType::create([
            'name' => 'Сельское хозяйство'
        ]);

        \App\Models\ServiceType::create([
            'name' => 'Ремонт бытовой техники'
        ]);

        \App\Models\Service::factory(40)->create();
        \App\Models\Specialist::factory(40)->create()->each(function($spec) {
            $spec->services()->sync(['service_id' => $spec->company->services()->inRandomOrder()->value('id')]);
        });
        \App\Models\Review::factory(100)->create();
        \App\Models\Record::factory(20)->create();

    }
}



