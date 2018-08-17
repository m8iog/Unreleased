<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Repositories\ArtistRepository;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        return view("artists.index", [
            "artists" => Artist::all()
        ]);
    }

    public function show($id){
      $artist = Artist::findOrFail($id);
      return view("artists.show", compact('artist'));
    }


}
