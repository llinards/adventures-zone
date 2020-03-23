<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\Attraction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index() {
        $attractions = DB::table('attractions')->get();
        return view('admin.index', compact('attractions'));
    }

    public function create() {
        return view('admin.create');
    }

    public function store() {
        $data = request()->validate([
            'attraction-lv' => 'required',
            'attraction-eng' => 'required', 
            'attraction-rus' => 'required',
            'attraction-cover-img' => 'required|image',
            'attraction-header-img' => 'required|image',
            'meta-description-lat' => 'required',
            'description-lat' => 'required',
            'description-rus' => 'required',
            'description-eng' => 'required',
        ]);
        try {
            $newAttraction = new Attraction();
            $newAttraction->name_lat = $data['attraction-lv'];
            $newAttraction->name_eng = $data['attraction-eng'];
            $newAttraction->name_rus = $data['attraction-rus'];
            $attractionSlug = $newAttraction->attraction_slug = Str::slug($data['attraction-lv'], '-');
            
            Storage::makeDirectory('public/img/attractions/' . $attractionSlug);
            $attractionsPath = 'img/attractions/' . $attractionSlug;

            $coverImagePath = request('attraction-cover-img')->store($attractionsPath,'public');
            $newAttraction->cover_photo_url = $coverImagePath;
            $headerImagePath = request('attraction-header-img')->store($attractionsPath,'public');
            $newAttraction->header_photo_url = $headerImagePath;

            $newAttraction->description_lat = $data['description-lat'];
            $newAttraction->description_rus = $data['description-rus'];
            $newAttraction->description_eng = $data['description-eng'];

            $newAttraction->meta_description_lat = $data['meta-description-lat'];
            $newAttraction->meta_description_rus = '';
            $newAttraction->meta_description_eng = '';


            $newAttraction->save();
            // Attraction::create($data);
            return redirect('/admin')->with('success', 'Kategorija pievienota!');
        } catch (\Exception $e) {
            // return redirect('/admin')->with('error', 'Kļūda!');
            return redirect('/admin')->with('error', $e);
        }
    }
}
