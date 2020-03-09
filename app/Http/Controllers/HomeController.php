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
        $attractions = Attraction::whereNotIn('id', array('6','8','9','10'))->get();
        return view('home', compact('attractions'));
    }
}
