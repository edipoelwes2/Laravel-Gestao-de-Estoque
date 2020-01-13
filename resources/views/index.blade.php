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

    <table class="table table-responsive-sm table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @forelse($datas as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><a href="{{ route('store.show', ['store'=>$product->id]) }}">{{ $product->descricao }}</a></td>
                    <td>R$ {{ $product->valor_saida }}</td>
                </tr>
            @empty
                <tr>

                    <td colspan="5"><h2>Nenhum Produto Cadastrado!!!</h2></td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
