@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <br>
            <h2>Fraldas</h2>
            <div class="clearfix"></div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor de Entrada</th>
                <th>Valor de Saida</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $product->descricao }}</td>
                <td>{{ $product->quantidade }}</td>
                <td>{{ $product->valor_entrada / $product->atualizado}}</td>
                <td>{{ $product->valor_saida }}</td>
            </tr>
        </tbody>
    </table>

@endsection
