<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::insert([
            [
                'user_id' => 2,
                'game_id' => 5,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 2,
                'game_id' => 4,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 2,
                'game_id' => 3,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 2,
                'game_id' => 2,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 2,
                'game_id' => 1,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 3,
                'game_id' => 5,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 3,
                'game_id' => 4,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 3,
                'game_id' => 3,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 3,
                'game_id' => 2,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 4,
                'game_id' => 5,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 4,
                'game_id' => 4,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 4,
                'game_id' => 3,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 5,
                'game_id' => 5,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 5,
                'game_id' => 4,
                'purchased_at' => '2022-07-03',
            ],
            [
                'user_id' => 6,
                'game_id' =>5,
                'purchased_at' => '2022-07-03',
            ],
        ]);
    }
}
