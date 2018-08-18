<?php

namespace App\Http\Controllers\Api;

use App\Genre;
use App\Events\ArtistCreated;
use App\Http\Resources\GenreResource;
use App\Repositories\GenreRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::query()
            ->when(request("q"), function ($query) {
                $query->where("name", "like", request("q") . "%");
            })
            ->get();

        return GenreResource::collection($genres);
    }

    public function store(Request $request)
    {

        $this->validate($request, ["name" => "unique:genres,name"]);

        $genre = Genre::create([
            "name" => $request->input("name")
        ]);



        return new GenreResource($genre);

    }
}
