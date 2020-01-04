@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <br>
            <a href="{{ route('store.create') }}" class="btn btn-success float-right">Cadastrar Fralda</a>
            <h2>Fraldas</h2>
            <div class="clearfix"></div>
        </div>
    </div>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($datas as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><a href="{{ route('store.show', ['store'=>$product->id]) }}">{{ $product->descricao }}</a></td>
                    <td>{{ $product->quantidade }}</td>
                    <td>{{ $product->valor_saida }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('store.edit', ['store'=>$product->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{ route('store.delete', ['store'=>$product->id]) }}" class="btn btn-sm btn-danger">Excluir</a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>

                    <td colspan="5"><h2>Nenhum Produto cadastrado!!!</h2></td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
