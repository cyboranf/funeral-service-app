<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        //TODO: dodac seeder uzytkowniko2 3 role

        foreach (range(1,10) as $index) {
            User::create([
                'name' => $faker->name,
                'surname' => $faker->lastName,
                'birthday' => $faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
                'city' => $faker->city,
                'role_id' => Role::all()->random()->id,
                'email' => $faker->unique()->safeEmail, // Dodanie generowania unikalnych e-maili
                'password' => bcrypt('password'), // Dodanie hasła
            ]);
        }
    }

}
