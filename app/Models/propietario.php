<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propietario extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre_propietario',
        'apellido_propietario',
        'cedula_propietario',
        'telefono_propietario',
        'correo_propietario',
        'password',
    ];

}
