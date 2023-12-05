<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

    protected $primarykey = 'id_usuario';

    protected $fillable = ['nombre','apellido','correo','contrasena','celular','num_documento','id_tipo_doc'];

    public function mascota(){
        return $this->hasMany('App\Models\Mascota','id_usuario','id_usuario');
    }
}
