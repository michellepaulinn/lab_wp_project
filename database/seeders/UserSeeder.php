<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Mockery\Generator\StringManipulation\Pass\Pass;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name'=>'user1',
                'email'=>'user1@gmail.com',
                'password'=>bcrypt('user1234'),
                'role'=>'Member'
            ],
            [
                'name'=>'user2',
                'email'=>'user2@gmail.com',
                'password'=>bcrypt('user2234'),
                'role'=>'Member'
            ],
            [
                'name'=>'Admin',
                'email'=>'admin@test.com',
                'password'=>bcrypt('admin1234'),
                'role'=>'Admin'
            ],
        ]);
    }
}
