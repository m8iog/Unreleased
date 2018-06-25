<?php

namespace App\Http\Controllers\Api;

use App\Artist;
use App\Http\Resources\ArtistResource;
use App\Repositories\ArtistRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::query()
            ->when(request("q"), function ($query) {
                $query->where("stage_name", "like", request("q") . "%");
            })
            ->get();

        return ArtistResource::collection($artists);
    }

    public function store(Request $request)
    {
        return new ArtistResource(Artist::create([
            "stage_name" => $request->input("stage_name")
        ]));

    }
}
