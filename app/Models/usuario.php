<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = "usuarios";
    protected $fillable = [
        'nombre',
        'apellido',
        'urlfoto',
        'direccion',
    ];
}
