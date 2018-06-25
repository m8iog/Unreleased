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
        if (\Auth::guest()) {
            flash("You must be logged in to post new tracks");
            return redirect()->route("register");
        }

        return view("tracks.create");
    }

    public function store(Request $request)
    {
        if (\Auth::guest()) {
            flash("You must be logged in to post new tracks");
            return redirect()->route("register");
        }


    }


}
