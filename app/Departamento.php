<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table='departamentos';
    protected $primaryKey='id';

    protected $fillable = ['nombre_departamento', 'id_region'];


    public function region(){
    	return $this->belongsTo(Region::class, 'id_region','id');
    }
}
