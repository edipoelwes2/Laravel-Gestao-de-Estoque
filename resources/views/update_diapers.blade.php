@extends('layouts.app')

@section('content')
    <br><br>
    <form action="{{ route('store.store') }}" method="post">
        @csrf

        <div class="form-group">

        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" step="1" name="quantidade" class="form-control">
        </div>

        <div class="form-group">
            <label>Valor Entrada</label>
            <input type="number" step="0.01" min="0" name="valor_entrada" class="form-control">
        </div>


        <button class="btn btn-lg btn-success">Salvar</button>
    </form>
    <br><br>
@endsection
