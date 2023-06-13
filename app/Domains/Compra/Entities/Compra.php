<?php

namespace App\Domains\Compra\Entities;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'valor',
        'cliente_id',
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Domains\Cliente\Entities\Cliente');
    }
}
