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
                'date' => '2022-06-30'
            ],
            [
                'user_id' => 3,
                'date' => '2022-06-30'
            ],
            [
                'user_id' => 4,
                'date' => '2022-06-30'
            ],
            [
                'user_id' => 5,
                'date' => '2022-06-30'
            ],
            [
                'user_id' => 6,
                'date' => '2022-06-30'
            ],
        ]);
    }
}
