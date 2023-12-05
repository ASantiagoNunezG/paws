<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabeceraVentas extends Model
{
    use HasFactory;

    protected $table = 'cabecera_ventas';

    protected $primaryKey = 'id_cabecera';

    protected $fillable = ['fecha_venta','total','id_usuario','id_tipo_boleta','fecha_recojo','ruc','razon','pago'];
}
