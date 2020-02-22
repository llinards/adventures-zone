<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attraction;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $attractions = Attraction::whereNotIn('attraction_slug', array('ballites', 'kafejnica'))->get();
        return view('home', compact('attractions'));
    }
}
