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
        //$datas = Product::all();
        $datas = Product::orderBy('id', 'desc')->paginate(10);;
        //$datas = DB::select("SELECT p.id, p.descricao, d.valor_saida, d.quantidade FROM products p JOIN diapers d ON p.id = d.products_id;");

        //$qtd = DB::select("SELECT d.products_id, p.id, d.quantidade FROM diapers d JOIN products p ON p.id = d.products_id;");


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
        $cont = $product->diaper()->count('quantidade');
        $total = $product->diaper()->sum('valor_entrada');

        if ($cont == 0)
        {
            $cont = 1;
        }


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
