<?php

namespace Database\Seeders;

use App\Models\GameSlider;
use Illuminate\Database\Seeder;

class GameSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameSlider::insert([
            [
                'game_id' => 1,
                'slider_image' => 'valorant1.jpg'
            ],
            [
                'game_id' => 1,
                'slider_image' => 'valorant2.jpg'
            ],
            [
                'game_id' => 1,
                'slider_image' => 'valorant3.jpg'
            ],
        ]);
    }
}
