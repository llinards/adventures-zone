<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricelist;

class PricelistController extends Controller
{
    public function index()
    {
        $pricelist = Pricelist::get();
        return view('admin.pricelist.index', compact('pricelist'));
    }
    
    public function edit(Pricelist $item)
    {
        return view('admin.pricelist.edit', compact('item'));
    }

    public function store(Pricelist $item)
    {
        try {
            $pricelistUpdate = Pricelist::find($item->id);
            $pricelistUpdate->price = request('price');
            $pricelistUpdate->total = request('total');
            $pricelistUpdate->save();
            return redirect('/admin/pricelist')->with('success', 'Atjaunots!');
        } catch (\Exception $e) {
            return back()->with('error', 'Kļūda!');
        }
    }
}
