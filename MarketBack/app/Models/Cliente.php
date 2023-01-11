<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function pedidos() 
    { 
        return $this->hasMany('App\Models\Pedido');
    }

    public function lista_deseos()
    {
        return $this->hasOne('App\Models\Lista_deseos');
    }

}