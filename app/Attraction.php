<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    public function image() {
        return $this->hasMany(Image::class);
    }
    
    public function getRouteKeyName() {
        return 'attraction_slug';
    }
}
