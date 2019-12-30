<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fralda extends Model
{
    protected $table = 'fraldas';

    protected $fillable = [
        'marca',
        'descricao',
        'tamanho',
        'quantidade',
        'valor_entrada',
        'valor_saida',
        'atualizado',
    ];
}
