<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //relacion con categorias

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }
}
