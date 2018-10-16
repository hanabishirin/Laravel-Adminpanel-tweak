<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenHouseNonMLS extends Model
{
    //
    protected $fillable = [
        'non_m_l_s_property_id',
        'openhouse_time',
        'openhouse_start_time',
        'openhouse_end_time',
        'openhouse_remark',
        'layout_diagram_urls',
    ];
}
