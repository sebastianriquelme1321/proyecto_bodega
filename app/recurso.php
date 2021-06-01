<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recurso extends Model
{
    //

    protected $table ='recurso';
    protected $primaryKey = 'rec_id';
    public function scopeRecurso($query,$unidad)
    {
     return $query->where('rec_id','=',$unidad);
      
    }
    
}
