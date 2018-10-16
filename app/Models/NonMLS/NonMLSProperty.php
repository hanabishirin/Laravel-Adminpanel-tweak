<?php

namespace App\Models\NonMLS;

use App\Models\BaseModel;
use App\Models\ModelTrait;
use App\Models\NonMLS\Traits\Attribute\NonMLSAttribute;


class NonMLSProperty extends BaseModel
{
    //
    use ModelTrait,
        NonMLSAttribute {
        // PageAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    protected $table;

    protected $guarded = ['id'];

    protected $fillable = [
        //basic mls info
        'area',
        'asking_price',
        'price_history',
        'unit_number',
        'address',
        'city',
        'state',
        'postal',
        'list_date',
        'update_date',
        'image_count',
        'latitude',
        'longitude',
        'price_sqft',
        'p_type',
        'p_layout',
        'brokerage',
        'school_listing',
        'imageURL',
        'property_status_id',
        'is_openHouse',

        //housing description
        'description',
        'Chinese_description',
        'community',
        'dwelling',
        'title_to_land',
        'zoning',
        'foundation',
        'built_year',
        'age',
        'view',
        'style',
        'service',
        'water',
        'construction',
        'exterior',
        'roof',
        'parking_type',
        'parking_loc',
        'site_inf',
        'outdoor',
        'heating',
        'fireplace_fuel',
        'floor_finish',
        'features',
        'amenities',
        'include_maint_fee',
        'bylaw_rest',
        'facing',

        //housing build details
        'stories',
        'fireplace',
        'bed_count',
        'bed_bsmt',
        'rm_count',
        'kitchen_count',
        'halfbath_count',
        'fullbath_count',
        'bath_count',
        'cov_park_count',
        'parking_count',
        'area_total',
        'lot_front_ft',
        'lot_front_mtr',
        'lot_depth_ft',
        'parcel_num',
        'lot_sqft',
        'lot_acre',
        'lot_sqmt',
        'lot_hect',
        'g_tax',
        'strata_fee',

        //strata info
        'expected_handoff',
        'avaliable_quantity',
        'is_transfer',
        'layout',
        'layout_diagram_urls',

    ];


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.nonmls.table');
    }
}
