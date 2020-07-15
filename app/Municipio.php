<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table='municipios';
    protected $primaryKey='id';

    protected $fillable = ['nombre_municipio', 'id_departamento'];


    public function departamento(){
    	return $this->belongsTo(Departamento::class, 'id_departamento','id');
    }
}
