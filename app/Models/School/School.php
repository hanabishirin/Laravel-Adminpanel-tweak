<?php

namespace App\Models\School;

use App\Models\BaseModel;
use App\Models\ModelTrait;
use App\Models\School\Traits\Attribute\SchoolAttribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends BaseModel
{
    //
    use ModelTrait,
        SoftDeletes,
        SchoolAttribute {
            SchoolAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    protected $guarded = ['id'];

//    protected $fillable = [
//        'name','address','city','longitude','latitude','type','is_public','school_zone','ranking_city','ranking_state','ranking_city_5_years','ranking_state_5_years','school_img_url'
//    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.schools.table');
    }


}
