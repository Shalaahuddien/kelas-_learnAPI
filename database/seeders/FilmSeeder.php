<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Film::query()->insert
        ([
            ["id_genre" => 1, "title" => "Starwars"],
            ["id_genre" => 1, "title" => "naruto"],
            ["id_genre" => 2, "title" => "ayat-ayat cinta"],
            ["id_genre" => 5, "title" => "Iwan False"],
        ]);
    }
}
