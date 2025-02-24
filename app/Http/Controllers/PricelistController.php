<?php

namespace App\Http\Controllers;

use App\Pricelist;

class PricelistController extends Controller
{
    public function index()
    {
        $pricelist = Pricelist::orderBy('name', 'ASC')->get();

        return view('admin.pricelist.index', compact('pricelist'));
    }

    public function edit(Pricelist $item)
    {
        return view('admin.pricelist.edit', compact('item'));
    }

    public function store(Pricelist $item)
    {
        try {
            $pricelistUpdate                  = Pricelist::find($item->id);
            $pricelistUpdate->price           = request('price');
            $pricelistUpdate->description_lat = request('description-lat');
            $pricelistUpdate->description_eng = request('description-eng');
            $pricelistUpdate->description_rus = request('description-rus');
            $pricelistUpdate->save();

            return redirect('/admin/pricelist')->with('success', 'Atjaunots!');
        } catch (\Exception $e) {
            return back()->with('error', 'Kļūda!');
        }
    }
}
