<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Genre::query()->insert
        ([
            ["name" => "Action"], //1
            ["name" => "Drama"], //2
            ["name" => "Horror"], //3
            ["name" => "Comedy"], //4
        ]);
    }
}
