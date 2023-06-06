<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coffin;
use Faker\Factory as Faker;

class CoffinsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $materials = ['Wood', 'Metal', 'Glass', 'Ceramic'];
        $colors = ['White', 'Black', 'Brown', 'Blue', 'Green', 'Yellow'];

        foreach (range(1,10) as $index) {
            Coffin::create([
                'material' => $materials[array_rand($materials)],
                'color' => $colors[array_rand($colors)],
                'size' => $faker->randomElement(['Small', 'Medium', 'Large']),
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 2000),
            ]);
        }
    }
}
