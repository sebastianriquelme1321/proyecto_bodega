<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad extends Model
{
    //
    protected $table ='unidad';
    protected $primaryKey = 'uni_id';

    public function scopeUnidadMedida($query,$recurso)
    {
     
       return $query->where('uni_id',$recurso);
      
    }
}
