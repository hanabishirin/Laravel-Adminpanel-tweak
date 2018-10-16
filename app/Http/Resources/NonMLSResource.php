<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class NonMLSResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'area'          => $this->area,
            'asking_price'  => $this->asking_price,
            'unit_number'   => $this->unit_number,
            'address'       => $this->address,
            'city'          => $this->city,
            'state'         => $this->state,
            'postal'        => $this->postal,
            'list_date'     => $this->list_date,
            'update_date'   => $this->update_date,
            'image_count'   => $this->image_count,
            'latitude'      => $this->latitude,
            'longitude'     => $this->longitude,
            'price_sqft'    => $this->price_sqft,
            'p_type'        => $this->p_type,
            'p_layout'      => $this->p_layout,
            'brokerage'     => $this->brokerage,
            'school_listing'  => $this->school_listing,
            'imageURL'            => $this->imageURL,
            'property_status_id'          => $this->property_status_id,
            'is_openHouse'  => $this->is_openHouse,
            'description'            => $this->description,
            'Chinese_description'          => $this->Chinese_description,
            'community'  => $this->community,
            'dwelling'            => $this->dwelling,
            'title_to_land'          => $this->title_to_land,
            'zoning'  => $this->zoning,
            'foundation'            => $this->foundation,
            'built_year'          => $this->built_year,
            'age'  => $this->age,
            'view'            => $this->view,
            'style'          => $this->style,
            'service'  => $this->service,
            'water'            => $this->water,
            'construction'          => $this->construction,
            'exterior'  => $this->exterior,
            'roof'            => $this->roof,
            'parking_type'          => $this->parking_type,
            'parking_loc'  => $this->parking_loc,
            'site_inf'            => $this->site_inf,
            'outdoor'          => $this->outdoor,
            'heating'  => $this->heating,
            'fireplace_fuel'            => $this->fireplace_fuel,
            'floor_finish'          => $this->floor_finish,
            'features'  => $this->features,
            'amenities'            => $this->amenities,
            'include_maint_fee'          => $this->include_maint_fee,
            'bylaw_rest'  => $this->bylaw_rest,
            'facing'            => $this->facing,
            'stories'          => $this->stories,
            'fireplace'  => $this->fireplace,
            'bed_count'            => $this->bed_count,
            'bed_bsmt'          => $this->bed_bsmt,
            'rm_count'  => $this->rm_count,
            'kitchen_count'            => $this->kitchen_count,
            'halfbath_count'          => $this->halfbath_count,
            'fullbath_count'  => $this->fullbath_count,
            'bath_count'            => $this->bath_count,
            'cov_park_count'          => $this->cov_park_count,
            'parking_count'  => $this->parking_count,
            'area_total'            => $this->area_total,
            'lot_front_ft'          => $this->lot_front_ft,
            'lot_front_mtr'  => $this->lot_front_mtr,
            'lot_depth_ft'            => $this->lot_depth_ft,
            'parcel_num'          => $this->parcel_num,
            'lot_sqft'  => $this->lot_sqft,
            'lot_acre'            => $this->lot_acre,
            'lot_sqmt'          => $this->lot_sqmt,
            'lot_hect'  => $this->lot_hect,
            'g_tax'            => $this->g_tax,
            'strata_fee'          => $this->strata_fee,
            'expected_handoff'  => $this->expected_handoff,
            'avaliable_quantity'            => $this->avaliable_quantity,
            'is_transfer'          => $this->is_transfer,
            'sales_type' => $this->sales_type,
            'layout'  => $this->layout,
            'layout_diagram_urls'            => $this->layout_diagram_urls,
            'created_at'    => $this->created_at->toDateString(),
        ];
    }
}
