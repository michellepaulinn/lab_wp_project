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
                'slider_image' => 'cs-1.jpg'
            ],
            [
                'game_id' => 1,
                'slider_image' => 'cs-2.jpg'
            ],
            [
                'game_id' => 1,
                'slider_image' => 'cs-3.jpg'
            ],
            [
                'game_id' => 1,
                'slider_image' => 'cs-4.jpg'
            ],
            [
                'game_id' => 2,
                'slider_image' => 'al-1.jpg'
            ],
            [
                'game_id' => 2,
                'slider_image' => 'al-2.jpg'
            ],
            [
                'game_id' => 2,
                'slider_image' => 'al-3.jpg'
            ],
            [
                'game_id' => 3,
                'slider_image' => 'f-1.jpg'
            ],
            [
                'game_id' => 3,
                'slider_image' => 'f-2.jpg'
            ],
            [
                'game_id' => 3,
                'slider_image' => 'f-3.jpg'
            ],
            [
                'game_id' => 4,
                'slider_image' => 'd-1.jpg'
            ],
            [
                'game_id' => 4,
                'slider_image' => 'd-2.jpg'
            ],
            [
                'game_id' => 4,
                'slider_image' => 'd-3.jpg'
            ],
            [
                'game_id' => 5,
                'slider_image' => 'pubg-1.jpg'
            ],
            [
                'game_id' => 5,
                'slider_image' => 'pubg-2.jpg'
            ],
            [
                'game_id' => 5,
                'slider_image' => 'pubg-3.jpg'
            ],
            [
                'game_id' => 6,
                'slider_image' => 'sv-1.jpg'
            ],
            [
                'game_id' => 6,
                'slider_image' => 'sv-2.jpg'
            ],
            [
                'game_id' => 6,
                'slider_image' => 'sv-3.jpg'
            ],
            [
                'game_id' => 7,
                'slider_image' => 'gta-1.jpg'
            ],
            [
                'game_id' => 7,
                'slider_image' => 'gta-2.jpg'
            ],
            [
                'game_id' => 7,
                'slider_image' => 'gta-3.jpg'
            ],
            [
                'game_id' => 8,
                'slider_image' => 'mhr-1.jpg'
            ],
            [
                'game_id' => 8,
                'slider_image' => 'mhr-2.jpg'
            ],
            [
                'game_id' => 8,
                'slider_image' => 'mhr-3.jpg'
            ],
            [
                'game_id' => 9,
                'slider_image' => 'ds-1.jpg'
            ],
            [
                'game_id' => 9,
                'slider_image' => 'ds-2.jpg'
            ],
            [
                'game_id' => 9,
                'slider_image' => 'ds-3.jpg'
            ],
            [
                'game_id' => 10,
                'slider_image' => 'r-1.jpg'
            ],
            [
                'game_id' => 10,
                'slider_image' => 'r-2.jpg'
            ],
            [
                'game_id' => 10,
                'slider_image' => 'r-3.jpg'
            ],
        ]);
    }
}
