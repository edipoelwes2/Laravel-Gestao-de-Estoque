@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <br>
            <a href="{{ route('admin.create') }}" class="btn btn-success float-right">Cadastrar Fralda</a>
            <h2>Fraldas</h2>
            <div class="clearfix"></div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($fraldas as $fralda)
                <tr>
                    <td>{{ $fralda->id }}</td>
                    <td>{{ $fralda->descricao }}</td>
                    <td>{{ $fralda->quantidade }}</td>
                    <td>{{ $fralda->valor_saida }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="" class="btn btn-sm btn-primary">Editar</a>
                            <form action="" method="post">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum Produto cadastrado!!!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $fraldas->links() }}
@endsection
