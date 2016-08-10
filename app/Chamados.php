<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamados extends Model
{
    protected $fillable = [
        'pedido_id',
        'titulo',
        'observacao'
    ];
}
