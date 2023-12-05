<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoMascota extends Model
{
    use HasFactory;
    protected $table = 'estado_mascota';

    protected $primaryKey = 'id_estado_mas';

    protected $fillable = ['nombre'];

    public function mascota(){
        return $this->hasMany('App\Models\Mascota','id_estado_mas','id_estado_mas');
    }
}
