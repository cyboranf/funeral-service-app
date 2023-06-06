<?php

use Illuminate\Database\Seeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\ChurchesTableSeeder;
use Database\Seeders\PriestsTableSeeder;
use Database\Seeders\CoffinsTableSeeder;
use Database\Seeders\FuneralsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ChurchesTableSeeder::class);
        $this->call(PriestsTableSeeder::class);
        $this->call(CoffinsTableSeeder::class);
        $this->call(FuneralsTableSeeder::class);
    }
}
