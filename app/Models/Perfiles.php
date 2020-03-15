<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $table = "perfiles";
    protected $primaryKey = "id_perfil";
    protected $fillable = ['p_descripcion'];
    //protected $with = ['users'];

    public function user()
    {
        return $this->belongsTohasMany(Users::class, 'perfil_id', 'id_perfil');
    }
}
