<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [           
        'image',
        'success_count',
        'success_icon',
        'success_desc',
        'vision_title',
        'vission_icon',
        'vission_desc',
        'mission_title',
        'mission_icon',
        'mission_desc',
        'ownership_title',
        'ownership_icon',
        'ownership_desc',
        'feature_one_title',
        'feature_one_icon',
        'feature_one_desc',
        'feature_two_title',
        'feature_two_icon',
        'feature_two_desc',
        'feature_three_title',
        'feature_three_icon',
        'feature_three_desc',
        'feature_four_title',
        'feature_four_icon',
        'feature_four_desc',
        'feature_five_title',
        'feature_five_icon',
        'feature_five_desc',
        'feature_six_title',
        'feature_six_icon',
        'feature_six_desc',
        'help_call_action',
        'help_call_links',
    ];
}