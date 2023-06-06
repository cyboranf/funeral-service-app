<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Church;
use Faker\Factory as Faker;

class ChurchesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            Church::create([
                'name' => 'Church ' . $index,
                'address' => $faker->address,
            ]);
        }
    }
}
