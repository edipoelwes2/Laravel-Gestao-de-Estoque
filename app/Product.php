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
    ];


    public function diaper()
    {
        return $this->hasMany(Diaper::class, 'products_id');
    }
}
