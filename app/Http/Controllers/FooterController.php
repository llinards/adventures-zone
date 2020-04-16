<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;

class FooterController extends Controller
{
    public function edit()
    {   
        $footer = Footer::get();
        return view ('admin.footer.edit', compact('footer'));
    }

    public function update()
    {
        try {
            $footerUpdate = Footer::find(1);
            $footerUpdate->mobile_phone = request('mobile_phone');
            $footerUpdate->working_hours = request('working_hours');
            $footerUpdate->save();
            return back()->with('success', 'Atjaunots!');
        } catch (\Exception $e) {
            return back()->with('error', 'Kļūda!');
        }
    }
}
