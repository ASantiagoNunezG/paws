<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoBoleta extends Model
{
    use HasFactory;
    protected $table = 'tipo_boleta';

    protected $primaryKey = 'id_tipo_boleta';

    protected $fillable = ['nombre'];
}
