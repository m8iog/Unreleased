<?php

namespace Tests\Unit;

use App\Genre;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GenreTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_genre_has_a_name()
    {
        $genre = Genre::create(["name" => "Hardstyle"]);
        
        $this->assertSame("Hardstyle", $genre->name);
    }
}
