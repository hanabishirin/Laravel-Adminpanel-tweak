<?php

namespace App\Repositories\Backend\NonMLS;

use App\Exceptions\GeneralException;
use App\Models\NonMLS\NonMLSProperty;
use App\Repositories\BaseRepository;

/**
 * Class FaqsRepository.
 */
class NonMLSRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = NonMLSProperty::class;

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.nonmls.table').'.id',
                config('module.nonmls.table').'.area',
                config('module.nonmls.table').'.asking_price',
                config('module.nonmls.table').'.price_history',
                config('module.nonmls.table').'.unit_number',
                config('module.nonmls.table').'.address',
                config('module.nonmls.table').'.city',
                config('module.nonmls.table').'.state',
                config('module.nonmls.table').'.postal',
                config('module.nonmls.table').'.list_date',
                config('module.nonmls.table').'.update_date',
                config('module.nonmls.table').'.image_count',
                config('module.nonmls.table').'.latitude',
                config('module.nonmls.table').'.longitude',
                config('module.nonmls.table').'.price_sqft',
                config('module.nonmls.table').'.p_type',
                config('module.nonmls.table').'.p_layout',
                config('module.nonmls.table').'.brokerage',
                config('module.nonmls.table').'.school_listing',
                config('module.nonmls.table').'.imageURL',
                config('module.nonmls.table').'.property_status_id',
                config('module.nonmls.table').'.is_openHouse',
                config('module.nonmls.table').'.description',
                config('module.nonmls.table').'.Chinese_description',
                config('module.nonmls.table').'.community',
                config('module.nonmls.table').'.dwelling',
                config('module.nonmls.table').'.title_to_land',
                config('module.nonmls.table').'.zoning',
                config('module.nonmls.table').'.foundation',
                config('module.nonmls.table').'.built_year',
                config('module.nonmls.table').'.age',
                config('module.nonmls.table').'.view',
                config('module.nonmls.table').'.style',
                config('module.nonmls.table').'.service',
                config('module.nonmls.table').'.water',
                config('module.nonmls.table').'.construction',
                config('module.nonmls.table').'.exterior',
                config('module.nonmls.table').'.roof',
                config('module.nonmls.table').'.parking_type',
                config('module.nonmls.table').'.parking_loc',
                config('module.nonmls.table').'.site_inf',
                config('module.nonmls.table').'.outdoor',
                config('module.nonmls.table').'.heating',
                config('module.nonmls.table').'.fireplace_fuel',
                config('module.nonmls.table').'.floor_finish',
                config('module.nonmls.table').'.features',
                config('module.nonmls.table').'.amenities',
                config('module.nonmls.table').'.include_maint_fee',
                config('module.nonmls.table').'.bylaw_rest',
                config('module.nonmls.table').'.facing',
                config('module.nonmls.table').'.stories',
                config('module.nonmls.table').'.fireplace',
                config('module.nonmls.table').'.bed_count',
                config('module.nonmls.table').'.bed_bsmt',
                config('module.nonmls.table').'.rm_count',
                config('module.nonmls.table').'.kitchen_count',
                config('module.nonmls.table').'.halfbath_count',
                config('module.nonmls.table').'.fullbath_count',
                config('module.nonmls.table').'.bath_count',
                config('module.nonmls.table').'.cov_park_count',
                config('module.nonmls.table').'.parking_count',
                config('module.nonmls.table').'.area_total',
                config('module.nonmls.table').'.lot_front_ft',
                config('module.nonmls.table').'.lot_front_mtr',
                config('module.nonmls.table').'.lot_depth_ft',
                config('module.nonmls.table').'.parcel_num',
                config('module.nonmls.table').'.lot_sqft',
                config('module.nonmls.table').'.lot_acre',
                config('module.nonmls.table').'.lot_sqmt',
                config('module.nonmls.table').'.lot_hect',
                config('module.nonmls.table').'.strata_fee',
                config('module.nonmls.table').'.expected_handoff',
                config('module.nonmls.table').'.avaliable_quantity',
                config('module.nonmls.table').'.is_transfer',
                config('module.nonmls.table').'.layout',
                config('module.nonmls.table').'.layout_diagram_urls',
                config('module.nonmls.table').'.created_at',
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
        if (NonMLSProperty::create($input)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.nonmls.create_error'));
    }

    /**
     * @param \App\Models\Faqs\Faq $nonmls
     * @param array                $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(NonMLSProperty $nonmls, array $input)
    {
//        $input['status'] = isset($input['status']) ? 1 : 0;

        //If faq updated successfully
        if ($nonmls->update($input)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.nonmls.update_error'));
    }

    /**
     * @param \App\Models\Faqs\Faq $nonmls
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(NonMLSProperty $nonmls)
    {
        if ($nonmls->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.nonmls.delete_error'));
    }

}
