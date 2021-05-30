<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class centro_costo_gestion extends Model
{
    //

    protected $table ='centro_costo_gestion';
    protected $primaryKey = 'cec_id';


    public function scopeCentrocosto($query,$unidad_negocio)
    {
      if($unidad_negocio)
      {
          return $query->where('unn_id','like',$unidad_negocio);
      }
    }

}
