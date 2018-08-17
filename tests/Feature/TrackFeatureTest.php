<?php

namespace Tests\Feature;

use App\Artist;
use App\Genre;
use App\Track;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TrackFeatureTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function can_list_tracks_on_the_homepage()
    {

    }


    /** @test */
    public function test_can_add_a_new_track_with_valid_data()
    {
        $user = factory(User::class)->create();

        $artist = factory(Artist::class)->create(["stage_name" => "Profite"]);
        $genre = factory(Genre::class)->create();


        $this->withoutExceptionHandling()
            ->actingAs($user)
            ->post(route("track.store"), [
                "artist_id" => $artist->id,
                "genre_id" => $genre->id,
                "title" => "Legends",
                "source_url" => "https://www.youtube.com/watch?v=gnXrcpUScTg",
                "source_description" => "Teaser video",
            ])
            ->assertStatus(200);

        $this->assertCount(1, Track::all());

    }
}
