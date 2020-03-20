<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
	public $timestamps = false;
	protected $primaryKey='id_servicio';
    protected $table = "servicios";
    protected $fillable = [
         's_descripcion', 'creado_en','emp_id', 'tipoServicio_id'
    ];
}
