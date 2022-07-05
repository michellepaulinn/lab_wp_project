<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            GameSeeder::class,
            GameSliderSeeder::class,
            CartSeeder::class,
            UserSeeder::class,
            TransactionSeeder::class,
            ReviewSeeder::class,
            CartDetailSeeder::class
        ]);
    }
}
