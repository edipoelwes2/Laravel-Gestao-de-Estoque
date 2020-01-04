@extends('layouts.app')

@section('content')
    <br><br>
    <form action="{{ route('store.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Marca</label>
            <input type="text" name="marca" class="form-control" value="{{ old('marca') }}">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="descricao" class="form-control" value="{{ old('descricao') }}">
        </div>

        <div class="form-group">
            <label>Tamanho</label>
            <input type="text" name="tamanho" class="form-control" value="{{ old('tamanho') }}">
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control" value="{{ old('quantidade') }}">
        </div>

        <div class="form-group">
            <label>Valor Entrada</label>
            <input type="number" name="valor_entrada" class="form-control" value="{{ old('valor_entrada') }}">
        </div>

        <div class="form-group">
            <label>Valor Saida</label>
            <input type="number" name="valor_saida" class="form-control" value="{{ old('valor_saida') }}">
        </div>

        <button class="btn btn-lg btn-success">Cadastrar</button>
    </form>
@endsection
