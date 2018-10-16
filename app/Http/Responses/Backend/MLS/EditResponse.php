<?php

namespace App\Http\Responses\Backend\MLS;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\MLS\MLSProperty
     */
    protected $mls;

    /**
     * @param \App\Models\MLS\MLSProperty
     */
    public function __construct($mls)
    {
        $this->mls = $mls;
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
        return view('backend.mlsproperties.edit')
            ->with('mls', $this->mls);
    }
}
