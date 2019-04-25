<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = [
        'titulo', 'descripcion', 'juegos', 'public'
    ];
}
