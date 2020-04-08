<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use DB;
use File;
use App\Attraction;
use App\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AttractionsController extends Controller
{
    public function index() {
        $attractions = Attraction::orderBy('created_at', 'DESC')->get();
        return view('admin.attractions.index', compact('attractions'));
    }

    public function create() {
        return view('admin.attractions.create');
    }

    public function store() {
        try {
            $data = $this->validatedData();
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
            $newAttraction->meta_description = $data['meta-description'];
            $newAttraction->save();
            return redirect('/admin')->with('success', 'Atrakcija pievienota!');
        } catch (\Exception $e) {
            return redirect('/admin')->with('error', 'Kļūda!');
        }
    }

    public function edit(Attraction $attraction) {
        $images = Image::allimages($attraction->id)->get();
        return view('admin.attractions.edit', compact('attraction', 'images'));
    }

    public function update() {
        try {
            $data = $this->validatedData();
            $updateAttraction = Attraction::find(request('id'));
            $updateAttraction->enabled = request('active');
            $updateAttraction->name_lat = $data['attraction-lv'];
            $updateAttraction->name_eng = $data['attraction-eng'];
            $updateAttraction->name_rus = $data['attraction-rus'];
            $attractionSlug = $updateAttraction->attraction_slug;
            $attractionsPath = 'img/attractions/' . $attractionSlug;

            if(request('attraction-cover-img')) {
                $coverImagePath = request('attraction-cover-img')->store($attractionsPath,'public');
                $updateAttraction->cover_photo_url = $coverImagePath;
            } 

            if(request('attraction-header-img')) {
                $headerImagePath = request('attraction-header-img')->store($attractionsPath,'public');
                $updateAttraction->header_photo_url = $headerImagePath;
            } 

            $updateAttraction->description_lat = $data['description-lat'];
            $updateAttraction->description_rus = $data['description-rus'];
            $updateAttraction->description_eng = $data['description-eng'];

            $updateAttraction->meta_description = $data['meta-description'];

            if(request('first-page-description-lat')) {
                $updateAttraction->first_page_description_lat = $data['first-page-description-lat'];
                $updateAttraction->first_page_description_eng = $data['first-page-description-eng'];
                $updateAttraction->first_page_description_rus = $data['first-page-description-rus'];
            } else {
                $updateAttraction->first_page_description_lat = NULL;
                $updateAttraction->first_page_description_eng = NULL;
                $updateAttraction->first_page_description_rus = NULL;
            }
            $updateAttraction->save();
            return back()->with('success', 'Atrakcija atjaunota!');
        } catch (\Exception $e) {
            return back()->with('error', 'Kļūda!');
        }
    }

    public function destroy() {
        try {
            $attractionId = request('category-id');
            $attraction = Attraction::find($attractionId);
            $attractionSlug = $attraction->attraction_slug;
            Storage::deleteDirectory('public/img/attractions/' . $attractionSlug);
            Attraction::destroy($attractionId);
            Image::where('attraction_id', $attractionId)->delete();
            return redirect('/admin')->with('success', 'Atrakcija un tās bildes izdzēstas!');
        } catch (\Exception $e) {
            return redirect('/admin')->with('error', 'Kļūda!');
        }
    }

    protected function validatedData()
    {
        $data = request()->validate([
            'attraction-lv' => 'required',
            'attraction-eng' => 'required', 
            'attraction-rus' => 'required',
            'attraction-cover-img' => 'file|image|max:1500',
            'attraction-header-img' => 'file|image|max:1500',
            'meta-description' => 'required',
            'description-lat' => 'required',
            'description-rus' => 'required',
            'description-eng' => 'required',
            'first-page-description-lat' => 'nullable',
            'first-page-description-eng' => 'nullable',
            'first-page-description-rus' => 'nullable',
        ]);
        return $data;
    }
}
