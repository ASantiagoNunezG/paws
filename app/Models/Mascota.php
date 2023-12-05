<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascota';

    protected $primaryKey = 'id_mascota';

    protected $fillable = ['nombre','tamano', 'edad', 'sexo','tipo','id_usuario','id_estado_mas'];

    public function usuario(){
        return $this->belongsTo('App\Models\Usuarios','id_usuario','id_usuario');
    }

    public function estado(){
        return $this->belongsTo('App\Models\EstadoMascota','id_estado_mas','id_estado_mas');
    }
}
