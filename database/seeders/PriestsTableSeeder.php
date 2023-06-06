<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Priest;
use Faker\Factory as Faker;

class PriestsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            try {
                Priest::create([
                    'name' => $faker->firstNameMale,
                    'surname' => $faker->lastName,
                    'religion' => 'Christianity',
                ]);
            } catch (\Exception $e) {
                error_log('Error creating priest: ' . $e->getMessage());
            }
        }
    }
}
