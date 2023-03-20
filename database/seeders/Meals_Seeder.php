<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Meals_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        

        $faker = Faker::create();

        for($i=0;$i<20;$i++) {
            Meal::create([
                'name' => $faker->sentence(1),
                'description' => $faker->paragraph(2),
                'category' => $faker->word(1),
                'tag' => $faker->word(1),
                'ingredient' => $faker->word(2),

            ]);
        }
    }
    
}
