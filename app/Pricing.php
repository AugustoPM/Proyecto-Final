<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = ['title', 'content', 'value', 'features1', 'features2', 'features3'];
}
