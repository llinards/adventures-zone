<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Attraction;
use App\Image;

class AttractionsController extends Controller
{
    public function index($locale, $attraction) {
        $attractionInfo = DB::table('attractions')->select('id','name_lat','name_rus','name_eng','attraction_slug','header_photo_url','description_lat','description_rus','description_eng','meta_description_lat','meta_description_rus','meta_description_eng')->where('attraction_slug', $attraction)->get();
        
        if($locale == 'en') {
            $attractionName = $attractionInfo[0]->name_eng;
            $attractionDescription = $attractionInfo[0]->description_eng;
            $attractionMetaDescription = $attractionInfo[0]->meta_description_eng;
        } else if ($locale == 'rus') {
            $attractionName = $attractionInfo[0]->name_rus;
            $attractionDescription = $attractionInfo[0]->description_rus;
            $attractionMetaDescription = $attractionInfo[0]->meta_description_rus;
        } else {
            $attractionName = $attractionInfo[0]->name_lat;
            $attractionDescription = $attractionInfo[0]->description_lat;
            $attractionMetaDescription = $attractionInfo[0]->meta_description_lat;
        }

        $attraction = [
            'id' => $attractionInfo[0]->id,
            'name' => $attractionName,
            'attraction_slug' => $attractionInfo[0]->attraction_slug,
            'header_photo_url' => $attractionInfo[0]->header_photo_url,
            'description' => $attractionDescription,
            'meta_description' => $attractionMetaDescription
        ];

        $attraction_id = $attraction['id'];
        $attractions = Attraction::whereNotIn('id', array($attraction_id,'6','8','9','10'))->get();
        $images = DB::table('images')->select('photo_url')->where('attraction_id', $attraction_id)->get();
        return view('product-page', compact('attraction', 'attractions', 'images'));
    }
}
