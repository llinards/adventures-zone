<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Attraction;

class AdminController extends Controller
{
    public function index() {
        $attractions = DB::table('attractions')->get();
        return view('admin.index', compact('attractions'));
    }

    public function create() {
        return view('admin.create');
    }
}
