<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    protected $fillable = [           
        'image',
        'selection_criteria_title',
        'selection_criteria_image',
        'selection_criteria_desc',
        'exit_strategy_title',
        'exit_strategy_desc',
        'need_help_title',
        'need_help_desc'
    ];
}
