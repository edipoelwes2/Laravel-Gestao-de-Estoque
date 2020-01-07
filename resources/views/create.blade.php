@extends('layouts.app')

@section('content')
    <br><br>
    <form action="{{ route('store.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label>Marca</label><br>

            <select name="marca" class="form-control btn btn-outline-dark">
                <option value="mamypoko">MamyPoko</option>
                <option value="huggies">Huggies</option>
                <option value="pampers">Pampers</option>
                <option value="babysec">Babysec</option>
                <option value="pompom">PomPom</option>
                <option value="cremer">Cremer</option>
                <option value="looneyTunes">Looney Tunes</option>
                <option value="scoobyDoo">Scooby-Doo</option>
                <option value="hipopo">Hipopó</option>
            </select>
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="descricao" class="form-control" value="{{ old('descricao') }}">
        </div>

        <div class="form-group">
            <label>Tamanho</label><br>

            <select name="tamanho" class="form-control btn btn-outline-dark">
                <option value="RN">RN</option>
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="XG">XG</option>
                <option value="XXG">XXG</option>
                <option value="grandinhos">Grandinhos</option>
            </select>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" step="1" name="quantidade" class="form-control" value="{{ old('quantidade') }}">
        </div>

        <div class="form-group">
            <label>Valor Entrada</label>
            <input type="number" step="0.01" min="0" name="valor_entrada" class="form-control">
        </div>

        <div class="form-group">
            <label>Valor Saida</label>
            <input type="number" step="0.01" min="0" name="valor_saida" class="form-control">
        </div>

        <button class="btn btn-lg btn-success">Salvar</button>
    </form>
@endsection
