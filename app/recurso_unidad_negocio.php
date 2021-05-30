<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recurso extends Model
{
    //

    protected $table ='recurso_unidad_negocio';
    protected $primaryKey = 'run_id';

    public function scopeRecurso($query,$unidad_negocio)
    {
      if($unidad_negocio)
      {
          return $query->where('uni_id','like',$unidad_negocio);
      }
    }
}
