<?php

namespace App\Http\Responses\Backend\Schools;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\School\School
     */
    protected $school;

    /**
     * @param \App\Models\School\School
     */
    public function __construct($school)
    {
        $this->school = $school;
    }

    /**
     * toReponse.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.schools.edit')
            ->with('schools', $this->school);
    }
}
