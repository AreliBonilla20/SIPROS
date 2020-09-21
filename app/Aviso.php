<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
        protected $table='avisos';
        protected $primaryKey='id';
    
        protected $fillable = ['titulo','descripcion','url'];

        public function institucion(){
                return $this->belongsTo(Institucion::class, 'id_institucion','id');
        }
    
        public function carrera(){
                return $this->belongsTo(Carrera::class, 'codigo_carrera','codigo');
        }
}
