<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Buy extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'buys';
    
    protected $fillable = [
        'code', 'validate', 'pago','products', 'cpf_cliente', 'valor_total', 'telefone_cliente', 'nome_cliente'
    ];
}