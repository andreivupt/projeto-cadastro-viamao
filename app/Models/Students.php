<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
      'name', 'sexo', 'name_dad', 'name_mom', 'id_address', 'id_historic'
    ];
}
