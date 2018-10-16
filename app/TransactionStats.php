<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionStats extends Model
{
    //
    protected $fillable = [
        'month_year','city_id','house_sold','apt_sold','avg_price'
    ];
}
