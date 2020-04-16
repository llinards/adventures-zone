<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attraction;
use App;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $attractions = Attraction::active()->firstpage()->get();
        $xszone = Attraction::active()->xszone()->get();
        $party = Attraction::active()->party()->get();
        $cafe = Attraction::active()->cafe()->get();
        $values = Attraction::active()->values()->get();
        $locale = App::getLocale();
        if($locale == 'en') {
            $xszoneName = $xszone[0]->name_eng;
            $xszoneFirstPageDescription = $xszone[0]->first_page_description_eng;

            $partyName = $party[0]->name_eng;
            $partyFirstPageDescription = $party[0]->first_page_description_eng;

            $cafeName = $cafe[0]->name_eng;
            $cafeFirstPageDescription = $cafe[0]->first_page_description_eng;

            $valuesName = $values[0]->name_eng;
            $valuesFirstPageDescription = $values[0]->first_page_description_eng;
        } else if ($locale == 'rus') {
            $xszoneName = $xszone[0]->name_rus;
            $xszoneFirstPageDescription = $xszone[0]->first_page_description_rus;

            $partyName = $party[0]->name_rus;
            $partyFirstPageDescription = $party[0]->first_page_description_rus;

            $cafeName = $cafe[0]->name_rus;
            $cafeFirstPageDescription = $cafe[0]->first_page_description_rus;

            $valuesName = $values[0]->name_rus;
            $valuesFirstPageDescription = $values[0]->first_page_description_rus;
        } else {
            $xszoneName = $xszone[0]->name_lat;
            $xszoneFirstPageDescription = $xszone[0]->first_page_description_lat;

            $partyName = $party[0]->name_lat;
            $partyFirstPageDescription = $party[0]->first_page_description_lat;

            $cafeName = $cafe[0]->name_lat;
            $cafeFirstPageDescription = $cafe[0]->first_page_description_lat;

            $valuesName = $values[0]->name_lat;
            $valuesFirstPageDescription = $values[0]->first_page_description_lat;
        }

        $xszoneHeaderImg = $xszone[0]->header_photo_url;
        $xszoneSlug = $xszone[0]->attraction_slug;

        $partyHeaderImg = $party[0]->header_photo_url;
        $partySlug = $party[0]->attraction_slug;

        $cafeHeaderImg = $cafe[0]->header_photo_url;
        $cafeSlug = $cafe[0]->attraction_slug;

        $valuesHeaderImg = $values[0]->header_photo_url;
        $valuesSlug = $values[0]->attraction_slug;

        $xszone = [
            'name' => $xszoneName,
            'img' => $xszoneHeaderImg,
            'slug' => $xszoneSlug,
            'firstPageDescription' => $xszoneFirstPageDescription,
        ];

        $party = [
            'name' => $partyName,
            'img' => $partyHeaderImg,
            'slug' => $partySlug,
            'firstPageDescription' => $partyFirstPageDescription,
        ];

        $cafe = [
            'name' => $cafeName,
            'img' => $cafeHeaderImg,
            'slug' => $cafeSlug,
            'firstPageDescription' => $cafeFirstPageDescription,
        ];

        $values = [
            'name' => $valuesName,
            'img' => $valuesHeaderImg,
            'slug' => $valuesSlug,
            'firstPageDescription' => $valuesFirstPageDescription,
        ];

        $footer = Footer::get();
        return view('home', compact('attractions', 'xszone', 'party', 'cafe', 'values','footer', 'locale'));
    }
}
