<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $fillable = [                   
        'title',
        'description',
        'image'
    ];
}
