<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'text',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
