<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionDetail::insert([
            [
                'transaction_id' => 1,
                'game_id' => 5
            ],
            [
                'transaction_id' => 1,
                'game_id' => 4
            ],
            [
                'transaction_id' => 1,
                'game_id' => 3
            ],
            [
                'transaction_id' => 1,
                'game_id' => 2
            ],
            [
                'transaction_id' => 1,
                'game_id' => 1
            ],
            [
                'transaction_id' => 2,
                'game_id' => 5
            ],
            [
                'transaction_id' => 2,
                'game_id' => 4
            ],
            [
                'transaction_id' => 2,
                'game_id' => 3
            ],
            [
                'transaction_id' => 2,
                'game_id' => 2
            ],
            [
                'transaction_id' => 3,
                'game_id' => 5
            ],
            [
                'transaction_id' => 3,
                'game_id' => 4
            ],
            [
                'transaction_id' => 3,
                'game_id' => 3
            ],
            [
                'transaction_id' => 4,
                'game_id' => 5
            ],
            [
                'transaction_id' => 4,
                'game_id' => 4
            ],
            [
                'transaction_id' => 5,
                'game_id' => 5
            ],
        ]);
    }
}
