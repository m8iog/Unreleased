<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];


    public function getAvatarUrl()
    {
        return "http://via.placeholder.com/80x80";
    }

}
