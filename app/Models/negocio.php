<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class negocio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_negocio',
        'informacion_negocio',
        'ruc_negocio',
        'telefono_negocio',
        'direccion_negocio',
        'correo_negocio',
        'nombre_producto',
        'imagen1',
        'imagen2',
        'imagen3',
        'video1',
        'video2'
    ];
}



  

