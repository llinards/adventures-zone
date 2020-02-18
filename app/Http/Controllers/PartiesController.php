<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Attraction;
use App\Image;

class PartiesController extends Controller
{
    public function index() {
        $attractions = Attraction::get();
        return view('party', compact('attractions'));
    }
}
