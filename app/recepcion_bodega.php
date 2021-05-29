<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recepcion_bodega extends Model
{
    //   
    protected $table ='recepcion_bodega';
    protected $primaryKey = 'rbo_id';

    public function documento_tributario(){
        return $this->hasMany(documento_tributario::class);
    }
    
    public function proveedor(){
        return $this->hasMany(proveedor::class);
    }
    public function unidad_negocio(){
        return $this->hasMany(unidad_negocio::class);
    }
    public function usuario(){
        return $this->hasMany(usuario::class);
    }

    
}
