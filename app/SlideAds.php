<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideAds extends Model
{
    //
protected $table = 'slide_ads';
protected $fillable = ['title', 'imgAds', 'status',];
}
