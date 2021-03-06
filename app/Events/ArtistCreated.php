<?php

namespace App\Events;

use App\Artist;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ArtistCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Artist
     */
    public $artist;

    public function __construct(Artist $artist)
    {
        $this->artist = $artist;
    }

}
