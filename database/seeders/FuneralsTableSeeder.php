<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Funeral;
use App\Models\User;
use App\Models\Coffin;
use App\Models\Church;
use App\Models\Priest;
use Faker\Factory as Faker;

class FuneralsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,20) as $index) {
            Funeral::create([
                'deceased_name' => $faker->name,
                'deceased_age' => $faker->numberBetween($min = 18, $max = 90),
                'user_id' => User::all()->random()->id,
                'coffin_id' => Coffin::all()->random()->id,
                'church_id' => optional(Church::all()->random())->id,
                'priest_id' => optional(Priest::all()->random())->id,
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 10000),
            ]);
        }
    }
}
