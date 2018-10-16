<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strata extends Model
{
    //
    protected $fillable = [
        'city_id','community_id','year_built','floors','units','developer'
    ];
}
