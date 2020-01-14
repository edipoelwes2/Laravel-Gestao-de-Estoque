<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    //public $timestamps = false;

    protected $fillable = [
        'marca',
        'descricao',
        'tamanho',
        'valor_saida',
        'qtd',
    ];


    public function diaper()
    {
        return $this->hasMany(Diaper::class, 'products_id');
    }
}
