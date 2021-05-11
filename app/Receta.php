<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'titulo', 'ingredientes', 'imagen', 'categoria_id', 'preparacion',
    ];

    //Obtiene la categoria de la receta via FK
    public function categoria()
    {
        return $this->belongsTo(CategoriaReceta::class);
    }

    //Obtiene la informacion por via PK
    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id') ;//fk de la tabla
    }
}
