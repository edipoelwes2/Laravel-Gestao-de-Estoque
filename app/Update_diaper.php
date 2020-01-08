<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update_diaper extends Model
{
    protected $table = 'update_diapers';

    protected $fillable = [

        'quantidade',
        'valor_entrada',

    ];
}
