<?php

namespace App\Listeners;

use App\Events\ArtistCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncArtistDetailsFromExternalSources implements ShouldQueue
{
    use InteractsWithQueue;


    /**
     * Create the event listener.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArtistCreated $event
     * @return void
     */
    public function handle(ArtistCreated $event)
    {
        // TODO(30 jun 2018) ~ Helge: Should do a search on Discogs and other external services and sync more details about this artist.
    }
}
