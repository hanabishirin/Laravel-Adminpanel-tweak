<?php

namespace App\Repositories\Backend\MLS;

use App\Exceptions\GeneralException;
use App\Models\MLS\MLSProperty;
use App\Repositories\BaseRepository;

/**
 * Class FaqsRepository.
 */
class MLSRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = MLSProperty::class;

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.mls.table').'.id',
                config('module.mls.table').'.area',
                config('module.mls.table').'.asking_price',
                config('module.mls.table').'.price_history',
                config('module.mls.table').'.unit_number',
                config('module.mls.table').'.address',
                config('module.mls.table').'.city',
                config('module.mls.table').'.state',
                config('module.mls.table').'.postal',
                config('module.mls.table').'.list_date',
                config('module.mls.table').'.update_date',
                config('module.mls.table').'.image_count',
                config('module.mls.table').'.latitude',
                config('module.mls.table').'.longitude',
                config('module.mls.table').'.price_sqft',
                config('module.mls.table').'.p_type',
                config('module.mls.table').'.brokerage',
                config('module.mls.table').'.school_listing',
                config('module.mls.table').'.imageURL',
                config('module.mls.table').'.property_status_id',
                config('module.mls.table').'.is_openHouse',
                config('module.mls.table').'.description',
                config('module.mls.table').'.Chinese_description',
                config('module.mls.table').'.community',
                config('module.mls.table').'.dwelling',
                config('module.mls.table').'.title_to_land',
                config('module.mls.table').'.zoning',
                config('module.mls.table').'.foundation',
                config('module.mls.table').'.built_year',
                config('module.mls.table').'.age',
                config('module.mls.table').'.view',
                config('module.mls.table').'.style',
                config('module.mls.table').'.service',
                config('module.mls.table').'.water',
                config('module.mls.table').'.construction',
                config('module.mls.table').'.exterior',
                config('module.mls.table').'.roof',
                config('module.mls.table').'.parking_type',
                config('module.mls.table').'.parking_loc',
                config('module.mls.table').'.site_inf',
                config('module.mls.table').'.outdoor',
                config('module.mls.table').'.heating',
                config('module.mls.table').'.fireplace_fuel',
                config('module.mls.table').'.floor_finish',
                config('module.mls.table').'.features',
                config('module.mls.table').'.amenities',
                config('module.mls.table').'.include_maint_fee',
                config('module.mls.table').'.bylaw_rest',
                config('module.mls.table').'.facing',
                config('module.mls.table').'.stories',
                config('module.mls.table').'.fireplace',
                config('module.mls.table').'.bed_count',
                config('module.mls.table').'.bed_bsmt',
                config('module.mls.table').'.rm_count',
                config('module.mls.table').'.kitchen_count',
                config('module.mls.table').'.halfbath_count',
                config('module.mls.table').'.fullbath_count',
                config('module.mls.table').'.bath_count',
                config('module.mls.table').'.cov_park_count',
                config('module.mls.table').'.parking_count',
                config('module.mls.table').'.area_total',
                config('module.mls.table').'.lot_front_ft',
                config('module.mls.table').'.lot_front_mtr',
                config('module.mls.table').'.lot_depth_ft',
                config('module.mls.table').'.parcel_num',
                config('module.mls.table').'.lot_sqft',
                config('module.mls.table').'.lot_acre',
                config('module.mls.table').'.lot_sqmt',
                config('module.mls.table').'.lot_hect',
                config('module.mls.table').'.strata_fee',
                config('module.mls.table').'.created_at',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
//        $input['status'] = isset($input['status']) ? 1 : 0;

        //If faq saved successfully, then return true
        if (MLSProperty::create($input)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.mls.create_error'));
    }

    /**
     * @param \App\Models\Faqs\Faq $mls
     * @param array                $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(MLSProperty $mls, array $input)
    {
//        $input['status'] = isset($input['status']) ? 1 : 0;

        //If faq updated successfully
        if ($mls->update($input)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.mls.update_error'));
    }

    /**
     * @param \App\Models\Faqs\Faq $mls
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(MLSProperty $mls)
    {
        if ($mls->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.mls.delete_error'));
    }

}
