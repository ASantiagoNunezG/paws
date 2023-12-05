<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
    use HasFactory;
    protected $table = 'detalle_ventas';

    protected $primaryKey = ['id_producto','id_cabecera'];

    protected $fillable = ['nombre', 'cantidad', 'precio','marca'];
}
