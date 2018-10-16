<?php

namespace App\Models\MLS;

use App\Models\BaseModel;
use App\Models\ModelTrait;
use App\Models\MLS\Traits\Attribute\MLSAttribute;


class MLSProperty extends BaseModel
{
    use ModelTrait,
        MLSAttribute {
        // PageAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    protected $table;

    protected $guarded = ['id'];

    protected $fillable = [
        //basic mls info
        'listing_id',
        'property_status_id',
        'mls_number',
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
        'image_update_time',
        'address_num_low',
        'latitude',
        'longitude',
        'price_sqft',
        'p_type',
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
        'v_tour',
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
        'area_main',
        'area_above',
        'area_below',
        'area_bsmt',
        'area_total',
        'area_unfinish',
        'area_GT',
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
    ];
}
