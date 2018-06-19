<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Repositories\GenreRepository;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return view("genres.index", [
            "genres" => Genre::all()
        ]);
    }
}
