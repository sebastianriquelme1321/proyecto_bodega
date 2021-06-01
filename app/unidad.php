<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad extends Model
{
    //
    protected $table ='unidad';
    protected $primaryKey = 'uni_id';

    public function scopeUnidadMedida($query,$recurso)//Funcion la cual busca la unida de medida correspondiente al recurso seleccionado comparando "uni_id"
    {
     
       return $query->where('uni_id',$recurso);
      
    }
}
