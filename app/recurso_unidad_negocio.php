<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recurso_unidad_negocio extends Model
{
    //

    protected $table ='recurso_unidad_negocio';
    protected $primaryKey = 'run_id';

    public function scopeRecursoUnidad($query,$unidad_negocio)//Funcion la cual busca el recurso_unidad comparando "unn_id"
    {
    
      {
          return $query->where('unn_id',$unidad_negocio);
      }
    }


    
}
