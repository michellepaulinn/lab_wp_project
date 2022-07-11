<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['categoryName' => 'Action RPG'],
            ['categoryName' => 'Shooter'],
            ['categoryName' => 'Fighting'],
            ['categoryName' => 'Sports and Racing'],
            ['categoryName' => 'Adventure'],
        ]);
    }
}
