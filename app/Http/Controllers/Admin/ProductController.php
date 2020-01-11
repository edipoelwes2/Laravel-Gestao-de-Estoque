<?php

namespace App\Http\Controllers\Admin;

use App\Diaper;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Product::all();

        return view('index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = $request->all();

        Product::create($datas);

        return redirect()->route('store.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = Product::find($id);

        $qtd = $product->diaper()->sum('quantidade');
        $cont = $product->diaper()->count('quantidade') + 1;
        $total = $product->diaper()->sum('valor_entrada');

        $media = number_format(($product->valor_entrada + $total) / $cont, 2, ',', '.');

        return view('show', compact('product', 'qtd', 'media'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = $request->all();
        $product = Product::findOrFail($id);

        $product->update($datas);

        return redirect()->route('store.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();

        return redirect()->route('store.index');
    }

    public function showDelete($id)
    {
        $product = Product::findOrFail($id);

        return view('delete', compact('product'));
    }

}
