<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpv extends Model
{
    use HasFactory;

    public function vendedor() 
    { 
        return $this->belongsTo('App\Models\Vendedor');
    }

}