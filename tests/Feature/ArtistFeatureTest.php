<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Artist;
use App\Genre;
use App\Track;
use App\User;

class ArtistFeatureTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_can_view_the_page_of_a_single_artist()
    {
      // Need an artist with a track
      $artist = factory(Artist::class)->create();
      $track = factory(Track::class)->create([
        'artist_id' => $artist->id
      ]);

      // Go to the artist spesific URL
      $response = $this->get(route("artist.show", $artist->id))->assertStatus(200);

      // Assert it exists, assert can see the track
      $response->assertSee($track->title);
    }
}