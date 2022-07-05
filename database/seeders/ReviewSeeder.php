<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::insert([
            [
                'user_id' => 1,
                'game_id' => 1,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 1,
                'game_id' => 2,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 1,
                'game_id' => 3,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 1,
                'game_id' => 4,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 1,
                'game_id' => 5,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 2,
                'game_id' => 1,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 2,
                'game_id' => 2,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 2,
                'game_id' => 3,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 2,
                'game_id' => 4,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 2,
                'game_id' => 5,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 3,
                'game_id' => 1,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 3,
                'game_id' => 2,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 3,
                'game_id' => 3,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 3,
                'game_id' => 4,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 3,
                'game_id' => 5,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 4,
                'game_id' => 1,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 4,
                'game_id' => 2,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 4,
                'game_id' => 3,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 4,
                'game_id' => 4,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 4,
                'game_id' => 5,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 5,
                'game_id' => 1,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 5,
                'game_id' => 2,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 5,
                'game_id' => 3,
                'recommended' => true,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 5,
                'game_id' => 4,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
            [
                'user_id' => 5,
                'game_id' => 5,
                'recommended' => false,
                'isiReview' => 'Jadi ini contoh review ygy'
            ],
        ]);
    }
}
