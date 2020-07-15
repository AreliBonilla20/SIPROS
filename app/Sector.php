<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table='sectors';
    protected $primaryKey='id';

    protected $fillable = ['nombre_sector'];
}
