<?php

namespace App\Http\Responses\Backend\NonMLS;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\NonMLS\NonMLSProperty
     */
    protected $nonmls;

    /**
     * @param \App\Models\NonMLS\NonMLSProperty
     */
    public function __construct($nonmls)
    {
        $this->nonmls = $nonmls;
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
        return view('backend.nonmlsproperties.edit')
            ->with('nonmls', $this->nonmls);
    }
}
