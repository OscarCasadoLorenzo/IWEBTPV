<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function pedido() 
    { 
        return $this->belongsToMany('App\Models\Pedido');
    }

    public function usuarios()
    {
        return $this->belongsToMany('App\Models\Usuario');
    }

    public function subcategoria()
    {
        return $this->belongsTo('App\Models\Subcategoria');
    }

}