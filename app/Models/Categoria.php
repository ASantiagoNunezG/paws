<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'categoria';

    protected $primaryKey = 'id_categoria';

    protected $fillable = ['nombre'];

    public function productos(){
        return $this->HasMany('App\Models\Productos', 'id_categoria', 'id_categoria');
    }
}
