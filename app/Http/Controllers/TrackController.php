<?php

namespace App\Http\Controllers;

use App\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index()
    {
        return view("tracks.index", [
            "tracks" => Track::all()
        ]);
    }


    public function create()
    {
        return view("tracks.create");
    }
}
