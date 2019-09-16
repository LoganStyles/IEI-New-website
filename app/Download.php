<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = [           
        'title',
        'name',
        'ext',
        'url',
        'icon',
        'size',
        'category',
        'description',
    ];
}
