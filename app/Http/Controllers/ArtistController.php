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

    public function create()
    {
      if (\Auth::guest()) {
          flash("You must be logged in to create new artists");
          return redirect()->route("register");
      }

      return view("artists.create");
    }

    public function store(Request $request)
    {
      if (\Auth::guest()) {
          flash("You must be logged in to create new artists");
          return redirect()->route("register");
      }
      $this->validate(request(), [
        'stage_name' => 'required|unique:artists',
        'real_name' => 'required',
      ]);

      Artist::create([
          "stage_name" => $request->input("stage_name"),
          "real_name" => $request->input("real_name"),
          "bio" => $request->input("bio"),
      ]);


      session()->flash('success', 'Your artist has been added successfully.');
      return redirect()->route("artist.index");
    }


}
