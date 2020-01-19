<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $qtd = DB::table('diapers')
            ->where('products_id', '=', $product->id)
            ->sum('quantidade');



        $product->qtd = $qtd;
        $product->save();

        return redirect()->route('store.index');
    }
}
