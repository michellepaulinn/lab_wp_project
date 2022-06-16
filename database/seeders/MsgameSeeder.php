<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class MsgameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mscategories')->insert([
            'categoryName' => 'action'
        ]);
        DB::table('msgames')->insert([
            'gameName'=> 'contoh1',
            'category_id'=>1,
            'price' =>10000,
            'gameThumbnail' => 'game1.png',
            'description' => 'ini cth desc'
        ]);
        DB::table('msgames')->insert([
            'gameName'=> 'contoh2',
            'category_id'=>1,
            'price' =>10000,
            'gameThumbnail' => 'game2.png',
            'description' => 'ini cth desc'
        ]); 
        DB::table('msgames')->insert([
            'gameName'=> 'contoh3',
            'category_id'=>1,
            'price' =>10000,
            'gameThumbnail' => 'game3.png',
            'description' => 'ini cth desc'
        ]);
        DB::table('msgames')->insert([
            'gameName'=> 'contoh4',
            'category_id'=>1,
            'price' =>10000,
            'gameThumbnail' => 'game3.png',
            'description' => 'ini cth desc'
        ]);
        DB::table('msgames')->insert([
            'gameName'=> 'contoh5',
            'category_id'=>1,
            'price' =>10000,
            'gameThumbnail' => 'game3.png',
            'description' => 'ini cth desc'
        ]);
    }

    // php artisan db:seed --class=PegawaiSeeder
    
    // DB::table('pegawai')->insert([
    //     'pegawai_nama' => 'Joni',
    //     'pegawai_jabatan' => 'Web Designer',
    //     'pegawai_umur' => 25,
    //     'pegawai_alamat' => 'Jl. Panglateh'
    // ]);


    // public function run()
    // {
    //     $user = new User;
    //     $user->name = "User";
    //     $user->email = "user@mail.com";
    //     $user->password = bcrypt('12345678'); 
    //     $user->save();
    // }
}
