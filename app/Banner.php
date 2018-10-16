<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable = [
        'localtion','image_url','redirect_url','is_active'
    ];
}
