<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $guarded = [];


    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }


    public function getReleaseStatusAttribute()
    {
        // TODO(30 jun 2018) ~ Helge: Fetch this from elsewhere in the future
        return "Unreleased";
    }
}
