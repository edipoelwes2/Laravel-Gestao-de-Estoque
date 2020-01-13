@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <br>
            <h2>Fraldas</h2>
            <div class="clearfix"></div>
        </div>
    </div>

    <table class="table table-responsive-sm table-striped ">
        <thead class="table-dark">
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço Medio de Compra</th>
                <th>Preço Venda</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $product->descricao }}</td>
                <td>{{ $product->quantidade + $qtd }}</td>
                <td>R$ {{ $media }}</td>
                <td>R$ {{ $product->valor_saida }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('store.edit', ['store'=>$product->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="{{ route('store.delete', ['store'=>$product->id]) }}" class="btn btn-sm btn-danger">Excluir</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
