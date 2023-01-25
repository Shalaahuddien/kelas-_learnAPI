<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    //
    function join()
    {
        // deklarasi table yang di gunakan
        $films = Film::query()
        ->join("genres", "genres.id","=","film.id_genre")
        //menspesifikasi data yang mau di ambil
        ->select(
            "film.id",
            "film.title",
            DB::raw("genres.name as genre")
        )

        // ordering & grouping
        ->orderByDesc("film.title")
        // ->orderBy("film.title") //asc
        ->get();
        return response()->json($films);
    }

    function count()
    {
        $genres = Genre::query()
        ->leftjoin("film", "film.id_genre", "=", "genres.id")
        ->select(
            "genres.id",
            "genres.name",
            DB::raw("count(film.id) as total")
        )->groupBy("genres.id")
        ->get();
        return response()->json($genres);
    }

    function leftjoin() {}

    function rightjoin() {}

}
