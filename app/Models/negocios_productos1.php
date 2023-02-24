<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class negocios_productos1 extends Model
{
    use HasFactory;
    protected $table = "negocios_productos";

    public function negocios()
    {
        return $this->belongsToMany(producto::class . 'negocios');

    }

    public function productos()
    {
        return $this->belongsToMany(negocio::class . 'productos');

    }

}
