<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function category() {
        return $this->hasOne(Attraction::class);
    }
}
