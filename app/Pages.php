<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = [           
        'page',          
        'title',
        'alias',
        'subtitle',
        'parent',
        'content_title',
        'description',
        'content'
    ];
}
