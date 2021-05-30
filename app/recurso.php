<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recurso extends Model
{
    //

    protected $table ='recurso';
    protected $primaryKey = 'rec_id';



    public function scopeRecurso($query,$recurso)
    {
      if($recurso)
      {
          return $query->where('rec_id','like',$recurso);
      }
    }
}
