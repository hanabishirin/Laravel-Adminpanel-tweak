<?php

namespace App\Models\School\Traits\Attribute;

/**
 * Class FaqAttribute.
 */
trait SchoolAttribute
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn"><a href="www.google.com" class="btn btn-flat btn-default"><i data-toggle="tooltip" data-placement="top" title="Edit" class="fa fa-pencil"></i></a></div>';

//            '<div class="btn-group action-btn">
//                 '.$this->getEditButtonAttribute().'
//                    '.$this->getViewButtonAttribute().'
//                    '.$this->getDeleteButtonAttribute('delete-school', 'admin.schools.destroy').'
//                </div>';
    }

    public function getEditButtonAttribute()
    {
        return '<a class="btn btn-flat btn-default" href="'.route('admin.schools.edit', $this).'">
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="fa fa-pencil"></i>
                </a>';
    }

    /**
     * @return string
     */
    public function getStatusButtonAttribute()
    {
        switch ($this->status && access()->allow('edit-school')) {
            case 0:
                return '<a href="'.route('admin.schools.mark', [$this, 1]).'" class="btn btn-flat btn-default"><i class="fa fa-check-square" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.backend.access.users.activate').'"></i></a>';
            // No break

            case 1:
                return '<a href="'.route('admin.schools.mark', [$this, 0]).'" class="btn btn-flat btn-default"><i class="fa fa-square" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.backend.access.users.deactivate').'"></i></a>';
            // No break

            default:
                return '';
            // No break
        }

        return '';
    }

    /**
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        if ($this->isActive()) {
            return "<label class='label label-success'>".trans('labels.general.active').'</label>';
        }

        return "<label class='label label-danger'>".trans('labels.general.inactive').'</label>';
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->status == 1;
    }

    /**
     * @return string
     */
    public function getViewButtonAttribute()
    {
        return '<a target="_blank" href="www.google.com" class="btn btn-flat btn-default">
                    <i data-toggle="tooltip" data-placement="top" title="View Page" class="fa fa-eye"></i>
                </a>';
    }


}
