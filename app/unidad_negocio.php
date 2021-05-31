<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad_negocio extends Model
{
    //
    protected $table ='unidad_negocio';
    protected $primaryKey = 'unn_id';

    public function scopeRecurso($query,$empresa)
    {
      if($empresa)
      {
          return $query->where('emp_id',$empresa);
      }
    }
}



