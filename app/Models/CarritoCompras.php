<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoCompras extends Model
{
    use HasFactory;

    protected $table = 'carrito_compras';

    protected $primaryKey = ['id_producto','id_usuario'];

    protected $fillable = ['nombre','cantidad','precio','marca'];
}
