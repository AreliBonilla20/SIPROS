<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInstitucion extends Model
{
    protected $table      = 'tipo_institucions';
    protected $primaryKey = 'id';

    protected $fillable = ['tipo_institucion'];
}
