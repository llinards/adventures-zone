<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Attraction;
use App\Image;

class AttractionsController extends Controller
{
    public function index($locale, $attraction) {
        $attraction = DB::table('attractions')->select('id','name','attraction_slug','header_photo_url','description','meta-description')->where('attraction_slug', $attraction)->get();
        $attraction_id = $attraction[0]->id;
        $attractions = Attraction::get();
        $images = DB::table('images')->select('photo_url')->where('attraction_id', $attraction_id)->get();
        return view('attraction', compact('attraction', 'attractions', 'images'));
    }
}
