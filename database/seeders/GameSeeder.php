<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::insert([
            [
                'gameName'=> 'contoh1',
                'category_id'=>1,
                'price' =>10000,
                'gameThumbnail' => 'game1.png',
                'description' => 'ini cth desc'
            ],
            [
                'gameName'=> 'contoh2',
                'category_id'=>1,
                'price' =>0,
                'gameThumbnail' => 'game2.png',
                'description' => 'ini cth desc'
            ],
            [
                'gameName'=> 'contoh3',
                'category_id'=>1,
                'price' =>10000,
                'gameThumbnail' => 'game3.png',
                'description' => 'ini cth desc'
            ],
            [
                'gameName'=> 'contoh4',
                'category_id'=>1,
                'price' =>10000,
                'gameThumbnail' => 'game3.png',
                'description' => 'ini cth desc'
            ],
            [
                'gameName'=> 'contoh5',
                'category_id'=>1,
                'price' =>10000,
                'gameThumbnail' => 'game3.png',
                'description' => 'ini cth desc'
            ]
        ]);
    }
}
