<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Image;

class ImagesController extends Controller
{
    public function destroy(Image $image, Request $request)
    {
        $imageId = $image->id;
        $imageLocation = request()->input('img-location');
         try {
            Image::destroy($imageId);
            Storage::delete('public/' . $imageLocation);
            return back()->with('success', 'Bilde izdzēsta!');
        } catch (\Exception $e) {
            return back()->with('error', 'Kļūda!');
        }
    }
}
