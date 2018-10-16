<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MLSOpenHouse extends Model
{
    //
    protected $fillable = [
        'm_l_s_property_id',
        'area',
        'mls_number',
        'updateDate',
        'comments',
        'startDate',
        'startTime',
        'endTime',
        'openHouseUniqueID',
        'updateTime',
    ];
}
