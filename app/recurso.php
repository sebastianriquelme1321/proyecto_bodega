<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recurso extends Model
{
    //

    protected $table ='recurso';
    protected $primaryKey = 'rec_id';

    public function scopeRecurso($query,$recurso_unidad_negocio)
    {
      if($recurso_unidad_negocio)
      {
          return $query->where('rec_id','like',$recurso_unidad_negocio);
      }
    }
}
