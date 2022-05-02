<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Image;
use App\Attraction;

class ImagesController extends Controller
{
    public function create()
    {
        $allAttractions = Attraction::get();
        return view('admin.images.create', compact('allAttractions'));
    }

    public function store()
    {
        try {
            $attractionId = request('attraction-id');
            $attractionLocation = Attraction::where('id', $attractionId)->get();
            $attractionLocation = 'storage/img/attractions/' . $attractionLocation[0]->attraction_slug;
            $images = request('attraction-imgs');
            foreach($images as $image) {
                $newName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move($attractionLocation, $newName);
                $imagesToDb = new Image();
                $imagesToDb->attraction_id = $attractionId;
                $imagesToDb->photo_url = $newName;
                $imagesToDb->save();
            }
            return redirect('/admin')->with('success', 'Bildes pievienotas!');
        } catch (\Exception $e) {
            return back()->with('error', 'Kļūda!');
        }
    }
    
    public function destroy(Image $image)
    {
        $imageId = $image->id;
        $imageLocation = request('img-location');
         try {
            Image::destroy($imageId);
            Storage::delete('public/' . $imageLocation);
            return back()->with('success', 'Bilde izdzēsta!');
        } catch (\Exception $e) {
            return back()->with('error', 'Kļūda!');
        }
    }
}
