<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideBar extends Model
{
    //
protected $table = 'slide_bars';
protected $fillable = ['title', 'imgSlide', 'status',];

}
