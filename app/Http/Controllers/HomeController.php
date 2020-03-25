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
        return view('home', compact('attractions'));
    }
}
