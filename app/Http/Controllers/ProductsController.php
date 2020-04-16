<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App;
use App\Attraction;
use App\Image;

class ProductsController extends Controller
{
    public function index($locale, $attraction) {
        $attractionInfo = Attraction::attraction($attraction)->get();
        if($locale == 'en') {
            $attractionName = $attractionInfo[0]->name_eng;
            $attractionDescription = $attractionInfo[0]->description_eng;
        } else if ($locale == 'ru') {
            $attractionName = $attractionInfo[0]->name_rus;
            $attractionDescription = $attractionInfo[0]->description_rus;
        } else {
            $attractionName = $attractionInfo[0]->name_lat;
            $attractionDescription = $attractionInfo[0]->description_lat;
        }

        $attractionMetaDescription = $attractionInfo[0]->meta_description;
        $attraction = [
            'id' => $attractionInfo[0]->id,
            'name' => $attractionName,
            'attraction_slug' => $attractionInfo[0]->attraction_slug,
            'header_photo_url' => $attractionInfo[0]->header_photo_url,
            'description' => $attractionDescription,
            'meta_description' => $attractionMetaDescription
        ];

        $attraction_id = $attraction['id'];
        $attractions = Attraction::whereNotIn('id', array($attraction_id,'8','9','10'))->get();
        $images = Image::allimages($attraction_id)->get();
        $footer = Footer::get();
        return view('product-page', compact('attraction', 'attractions', 'images','footer','locale'));
    }
}
