<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [                   
        'title',
        'description',
        'image',
        'slide_one_p',
        'slide_one_h2',
        'slide_one_image',
        'slide_two_p',
        'slide_two_h2',
        'slide_two_image',
        'slide_three_p',
        'slide_three_h2',
        'slide_three_image',
        'widget_one_title',
        'widget_one_desc',
        'widget_two_title',
        'widget_two_desc',
        'services_title',
        'work_with_title',
        'work_with_widget_one',
        'work_with_widget_two',
        'testimonial_title',
        'awards_title'
    ];
}
