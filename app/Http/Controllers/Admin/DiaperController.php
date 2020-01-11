<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class DiaperController extends Controller
{
    public function create()
    {
        $products = Product::all(['id', 'descricao']);

        return view('create_diapers', compact('products'));
    }


    public function store(Request $request)
    {
        $datas = $request->all();

        $product = Product::find($datas['produto']);

        $product->diaper()->create($datas);


        return redirect()->route('store.index');
    }
}
