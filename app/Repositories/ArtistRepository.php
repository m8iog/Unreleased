<?php


namespace App\Repositories;


use App\Artist;

class ArtistRepository
{

    public function getAll()
    {
        return Artist::all();
    }
}