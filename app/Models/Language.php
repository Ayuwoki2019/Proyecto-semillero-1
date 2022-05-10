<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [ 'name_language'];

public function perfil()
{
    return $this->hasMany('App\Models\Perfil','language_id');
}


}

