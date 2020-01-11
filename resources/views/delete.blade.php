@extends('layouts.app')

@section('content')

    <br><br>

<table class="table table-striped">
    <thead class="table-dark">
    <tr>
        <th>#</th>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Valor</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->descricao }}</td>
        <td>{{ $product->quantidade }}</td>
        <td>{{ $product->valor_saida }}</td>
    </tr>
    </tbody>
</table>

    <div class="alert alert-info" role="alert">
        Tem certeza que quer excluir esse itém!!!
    </div>
<div class="btn-group float-right">
    <a href="{{ route('store.index') }}" class="btn btn-sm btn-primary">Voltar</a>
    <form action="{{ route('store.destroy', ['store'=>$product->id]) }}" method="post">

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
    </form>
</div>

@endsection
