<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'nombre','cargo', 'mensaje','image_name','descripcion'
         ];
}
