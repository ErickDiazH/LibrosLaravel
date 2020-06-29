<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//uno a muchos(inverso) - {belongsTo} - un libro pertenece a una categoria
class Libro extends Model
{
    public function categoria(){ //$libro->categoria->nombre
        return $this->belongsTo(Categoria::class); //Pertenece a una categoría.
    }

    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class); // Muchos a muchos
    }
    
    protected $dates = ['fecha']; // pasar fechas a carbon

}
