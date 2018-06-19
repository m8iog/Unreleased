<?php


namespace App\Repositories;


use App\Artist;
use App\Genre;

class GenreRepository
{

    public function getAll()
    {
        return Genre::all();
    }
}