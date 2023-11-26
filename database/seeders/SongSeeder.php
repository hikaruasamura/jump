<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;



class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
                'name' => 'song1',
                'song' => '1.mp3',
         ]);
        DB::table('songs')->insert([
                'name' => 'song2',
                'song' => '2.mp3',
         ]);
        DB::table('songs')->insert([
                'name' => 'song3',
                'song' => '3.mp3',
         ]);

    }
}
