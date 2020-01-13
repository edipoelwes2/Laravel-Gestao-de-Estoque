@extends('layouts.app')

@section('content')
    <br><br>
    <form action="{{ route('diaper.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label>Produto</label>
            <select name="produto" class="form-control btn btn-outline-dark">
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->id }} - {{ $product->descricao }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" step="1" name="quantidade" class="form-control">
        </div>

        <div class="form-group">
            <label>Valor Compra</label>
            <input type="number" step="0.01" min="0" name="valor_entrada" class="form-control">
        </div>

        <div class="form-group">
            <label>Valor Venda</label>
            <input type="number" step="0.01" min="0" name="valor_saida" class="form-control">
        </div>


        <button type="submit" class="btn btn-lg btn-success">Cadastrar</button>
    </form>
    <br><br>
@endsection
