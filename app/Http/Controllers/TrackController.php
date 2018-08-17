<?php

namespace App\Http\Controllers;

use App\Genre;
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

        return view("tracks.create", [
            "genres" => Genre::all()
        ]);
    }

    public function store(Request $request)
    {
        if (\Auth::guest()) {
            flash("You must be logged in to post new tracks");
            return redirect()->route("register");
        }
        $this->validate(request(), [
          'title' => 'required',
          'artist_id' => 'required',
          'genre_id' => 'required',
          'source_url' => 'required | url',
          'source_description' => 'required',
        ]);

        Track::create([
            "artist_id" => $request->input("artist_id"),
            "genre_id" => $request->input("genre_id"),
            "source_url" => $request->input("source_url"),
            "source_description" => $request->input("source_description"),
            "title" => $request->input("title"),
        ]);

    }


}
