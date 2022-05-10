<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'year', 'title', 'category', 'description', 'perfil_id'
    ];


    public function perfil()
    {
        return $this->belongsTo('App\Models\Perfil');
    }
}
