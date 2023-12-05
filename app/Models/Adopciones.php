<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopciones extends Model
{
    use HasFactory;
    protected $table = 'adopciones';

    protected $primaryKey = 'his_adop';

    protected $fillable = ['id_empleado','id_mascota','id_usuario','fecha'];

    

}
