<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     *  @return void
     */
    public function run()
    {
        $i = 0;
        while($i < 50)
        {
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'desc' => Str::random(30),
            ]);
            $i++;
        }
    }
}
