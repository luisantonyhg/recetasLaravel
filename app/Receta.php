<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    // obtiene la categoria de la receta via la llave foranea

    public function categoria(){

        return $this->belongsTo(CategoriaReceta::class);

    }
}