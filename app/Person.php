<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'nombre', 'estado',
    ];

    function gender()
    {
       return $this->belongsTo('App\Gender');
    }
}
