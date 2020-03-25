<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $guarded = [];
    
    public function image() {
        return $this->hasMany(Image::class);
    }
    
    public function getRouteKeyName() {
        return 'attraction_slug';
    }

    public function scopeActive($query) {
        return $query->where('enabled', true);
    }
    
    public function scopeFirstpage($query) {
        return $query->whereNotIn('id', array('6','8','9','10'));
    }

    public function scopeAttraction($query, $id) {
        return $query->where('attraction_slug', $id);
    }

    public function activeOptions()
    {
        return [
            1 => 'Aktivizēts',
            0 => 'Deaktivizēts',
        ];
    }
}
