<?php

namespace App\Http\Controllers\Backend\MlsProperties;

use App\Area;
use App\City;
use App\Community;
use App\Http\Controllers\Controller;

use App\Models\MLS\MLSProperty;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\MLS\CreateMLSRequest;
use App\Http\Requests\Backend\MLS\DeleteMLSRequest;
use App\Http\Requests\Backend\MLS\EditMLSRequest;
use App\Http\Requests\Backend\MLS\ManageMLSRequest;
use App\Http\Requests\Backend\MLS\StoreMLSRequest;
use App\Http\Requests\Backend\MLS\UpdateMLSRequest;
use App\Http\Responses\Backend\MLS\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Repositories\Backend\MLS\MLSRepository;


class MlsPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $mls;

    public function __construct(MLSRepository $mls)
    {
        $this->mls = $mls;
    }

    public function index(ManageMLSRequest $request)
    {
        //
        return new ViewResponse('backend.mlsproperties.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Http\Requests\Backend\Mls\CreateMLSRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateMLSRequest $request)
    {
        $cities = City::pluck('name')->toArray();
        $communities = Community::pluck('name')->toArray();
        $area = Area::pluck('name')->toArray();

        return new ViewResponse('backend.mlsproperties.create',compact('cities','communities','area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Backend\Mls\StoreMLSRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreMLSRequest $request)
    {
        $this->mls->create($request->all());

        return response()->json(['status'=>'success']);
//        return new RedirectResponse(route('admin.mlsproperties.index'), ['flash_success' => trans('alerts.backend.mlsproperties.created')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Mls\MLSProperty                            $mls
     * @param \App\Http\Requests\Backend\Mls\EditMLSRequest $request
     *
     * @return \App\Http\Responses\Backend\MLS\EditResponse
     */
    public function edit(MLSProperty $mls, EditMLSRequest $request)
    {
//        $mls->area = "test";
        return new EditResponse($mls);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Backend\Mls\UpdateMLSRequest $request
     * @param \App\Models\Mls\MLSProperty                              $id
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateMLSRequest $request, MLSProperty $mls)
    {
        $this->mls->update($mls, $request->all());

        return new RedirectResponse(route('admin.mlsproperties.index'), ['flash_success' => trans('alerts.backend.mlsproperties.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Mls\MLS                              $mls
     * @param \App\Http\Requests\Backend\Mls\DeleteMLSRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(MLSProperty $mls, DeleteMLSRequest $request)
    {
        $this->mls->delete($mls);

        return new RedirectResponse(route('admin.mlsproperties.index'), ['flash_success' => trans('alerts.backend.mlsproperties.deleted')]);
    }
}
