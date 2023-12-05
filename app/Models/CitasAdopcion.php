<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitasAdopcion extends Model
{
    use HasFactory;
    protected $table = 'cita_adopcion';

    protected $primaryKey = 'id_cita_mascota';

    protected $fillable = ['fecha','hora','id_usuario','id_mascota','id_estado_res'];
}
