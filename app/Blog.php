<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = [
        'city_id','post_date','tag','banner_img','heading','sub_heading','blog_content','wechat_url'
    ];
}
