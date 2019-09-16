<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navmenu extends Model
{
    protected $fillable = [
        'top',
        'parent',
        'page',
        'url'
    ];
}
