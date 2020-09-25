<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table      = 'institucions';
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'tipo_institucion_id', 'direccion', 'id_region', 'id_departamento', 'id_municipio', 'sector_id'];

    public function tipoInstitucion()
    {
        return $this->belongsTo(TipoInstitucion::class, 'tipo_institucion_id', 'id');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector_id', 'id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region', 'id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento', 'id');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio', 'id');
    }

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'id_institucion', 'id');
    }
}
