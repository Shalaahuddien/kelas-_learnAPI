<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class Film extends Model
{
    use HasFactory;

    protected $table = "film";

    protected $fillable =
    [
        "title",
        "id_genre"
    ];

}
