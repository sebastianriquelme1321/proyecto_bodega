<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad_negocio extends Model
{
    //
    protected $table ='unidad_negocio';
    protected $primaryKey = 'unn_id';

    public function scopeUnidad($query,$empresa)//Funcion la cual busca la unidada de negocio comparando "emp_id"
    {
     
       return $query->where('emp_id',$empresa);
      
    }

    
}



