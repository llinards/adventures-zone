<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Support\Facades\App;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $footer = Footer::get();
        $locale = App::getLocale();

        return view('privacy-policy', compact('footer', 'locale'));
    }
}
