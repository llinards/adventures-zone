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
            'attraction-cover-img' => '',
        ]);
        try {
            $newAttraction = new Attraction();
            $newAttraction->name_lat = $data['attraction-lv'];
            $newAttraction->name_eng = $data['attraction-eng'];
            $newAttraction->name_rus = $data['attraction-rus'];
            $attractionSlug = $newAttraction->attraction_slug = Str::slug($data['attraction-lv'], '-');
            Storage::makeDirectory('public/img/attractions/' . $attractionSlug);

            // Temporary
            $newAttraction->cover_photo_url = 'img-min.jpg';
            $newAttraction->header_photo_url = 'header.jpg';

            $newAttraction->description_lat = 'nothing';
            $newAttraction->description_rus = 'nothing';
            $newAttraction->description_eng = 'nothing';

            $newAttraction->meta_description_lat = 'nothing';
            $newAttraction->meta_description_rus = 'nothing';
            $newAttraction->meta_description_eng = 'nothing';


            $newAttraction->save();
            // Attraction::create($data);
            return redirect('/admin')->with('success', 'Kategorija pievienota!');
        } catch (\Exception $e) {
            // return redirect('/admin')->with('error', 'Kļūda!');
            return redirect('/admin')->with('error', $e);
        }
    }
}
