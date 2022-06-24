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
                'name'=>'Misel',
                'email'=>'misel@gmail.com',
                'password'=>bcrypt('user1234'),
                'role'=>'Member'
            ],
            [
                'name'=>'Zhan',
                'email'=>'zhan@gmail.com',
                'password'=>bcrypt('zhan1991'),
                'role'=>'Member'
            ],
            [
                'name'=>'Tsukki Admin',
                'email'=>'tsukki@admin.com',
                'password'=>bcrypt('admin1234'),
                'role'=>'Admin'
            ],
        ]);
    }
}
