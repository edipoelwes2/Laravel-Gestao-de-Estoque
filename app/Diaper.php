<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Diaper extends Model
{
    protected $table = 'diapers';

    protected $fillable = [

        'qtds',
        'valor_entrada',
    ];


    public function products()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
