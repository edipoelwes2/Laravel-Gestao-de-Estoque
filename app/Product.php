<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'marca',
        'descricao',
        'tamanho',
        'quantidade',
        'valor_entrada',
        'valor_saida',
        'atualizado',
    ];


    public function diaper()
    {
        return $this->hasMany(Diaper::class, 'products_id');
    }
}
