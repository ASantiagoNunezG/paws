<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'productos';

    protected $primaryKey = 'id_producto';

    protected $fillable = ['nombre','precio','cantidad','id_categoria','marca','id_proveedor'];

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria','id_categoria','id_categoria');
    }
    public function proveedor(){
        return $this->belongsTo('App\Models\Proveedor','id_proveedor','id_proveedor');
    }
}
