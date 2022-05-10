<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = [
        'profesion',
        'imagen',
        'edad',
        'cargo',
        'descripcion',
        'nombre',
        'apellido',
        'añosemillero',
        'ponencias',
        'proyectos',
        'semestre'
    ];

    // public function users()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }
    public function education()
    {
        return $this->hasMany('App\Models\Education','perfil_id');
    }
    
    public function language()
    {
        return $this->hasMany('App\Models\Language','perfil_id');
    }

}
