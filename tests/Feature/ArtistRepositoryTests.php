<?php

namespace Tests\Feature;

use App\Artist;
use App\Repositories\ArtistRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtistRepositoryTests extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function can_get_a_list_of_artists_from_the_artists_repository()
    {

        factory(Artist::class)->times(10)->create();

        $repository = new ArtistRepository();

        $artists = $repository->getAll();

        $this->assertCount(10, $artists);
    }
}
