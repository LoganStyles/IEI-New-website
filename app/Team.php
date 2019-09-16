<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [                   
        'name',
        'position',
        'profile',
        'category',
        'image'
    ];
}
