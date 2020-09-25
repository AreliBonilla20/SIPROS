<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
        protected $table='avisos';
        protected $primaryKey='id';
    
        protected $fillable = ['titulo','descripcion','url'];

}
