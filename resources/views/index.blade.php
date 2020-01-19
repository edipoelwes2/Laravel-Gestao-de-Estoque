@extends('layouts.app')

@section('content')
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-12">
            <br>
            <a href="{{ route('store.create') }}" class="btn btn-success float-right">Cadastrar Fralda</a>
            <div class="clearfix"></div>
        </div>
    </div>

    <table class="table table-responsive-sm table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @forelse($datas as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><a href="{{ route('store.show', ['store'=>$product->id]) }}">{{ $product->descricao }}</a></td>
                    <td> {{ $product->qtd ?? '0' }} </td>
                    <td>R$ {{ number_format($product->valor_saida, 2, ',', '.') }}</td>

                </tr>
            @empty
                <tr>

                    <td colspan="5"><h2>Nenhum Produto Cadastrado!!!</h2></td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $datas->links() }}
@endsection
