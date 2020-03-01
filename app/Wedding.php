<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $guarded=[];
    protected $casts = [
        'gallery' => 'array'
    ];

}
