<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function productos() 
    { 
        return $this->hasMany('App\Models\Producto');
    }

    public function usuarios()
    {
        return $this->belongsToMany('App\Models\Usuario');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

}