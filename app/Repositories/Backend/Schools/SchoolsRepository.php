<?php

namespace App\Repositories\Backend\Schools;

use App\Exceptions\GeneralException;
use App\Models\School\School;
use App\Repositories\BaseRepository;

/**
 * Class FaqsRepository.
 */
class SchoolsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = School::class;

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.schools.table').'.id',
                config('module.schools.table').'.name',
                config('module.schools.table').'.address',
                config('module.schools.table').'.city',
                config('module.schools.table').'.type',
                config('module.schools.table').'.is_public',
                config('module.schools.table').'.updated_at',
                config('module.schools.table').'.deleted_at',
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
        if (School::create($input)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.schools.create_error'));
    }

    /**
     * @param \App\Models\Faqs\Faq $school
     * @param array                $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(School $school, array $input)
    {
//        $input['status'] = isset($input['status']) ? 1 : 0;

        //If faq updated successfully
        if ($school->update($input)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.schools.update_error'));
    }

    /**
     * @param \App\Models\Faqs\Faq $school
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(School $school)
    {
        if ($school->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.schools.delete_error'));
    }

}
