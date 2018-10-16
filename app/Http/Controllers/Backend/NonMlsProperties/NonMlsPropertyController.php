<?php

namespace App\Http\Controllers\Backend\NonMlsProperties;

use App\Area;
use App\City;
use App\Community;
use App\Http\Controllers\Controller;

use App\Models\NonMLS\NonMLSProperty;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\NonMLS\CreateNonMLSRequest;
use App\Http\Requests\Backend\NonMLS\DeleteNonMLSRequest;
use App\Http\Requests\Backend\NonMLS\EditNonMLSRequest;
use App\Http\Requests\Backend\NonMLS\ManageNonMLSRequest;
use App\Http\Requests\Backend\NonMLS\StoreNonMLSRequest;
use App\Http\Requests\Backend\NonMLS\UpdateNonMLSRequest;
use App\Http\Responses\Backend\NonMLS\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Repositories\Backend\NonMLS\NonMLSRepository;


class NonMlsPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $nonmls;

    public function __construct(NonMLSRepository $nonmls)
    {
        $this->nonmls = $nonmls;
    }

    public function index(ManageNonMLSRequest $request)
    {
        //
        return new ViewResponse('backend.nonmlsproperties.index');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Http\Requests\Backend\NonMls\CreateNonMLSRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateNonMLSRequest $request)
    {
        $cities = City::pluck('name')->toArray();
        $communities = Community::pluck('name')->toArray();
        $area = Area::pluck('name')->toArray();

        return new ViewResponse('backend.nonmlsproperties.create',compact('cities','communities','area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Backend\NonMls\StoreNonMLSRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreNonMLSRequest $request)
    {

        $input = $request->except('_token','images');

        $input['area'] = Area::find($input['area'])->name;
        $input['city'] = City::find($input['city'])->name;
        if($input['community'] != null){
            $input['community'] = Community::find($input['community'])->name;
        }

        if($file = $request->file('images')){
            $input['imageURL'] = '';
            foreach($file as $i){
                $name = time().date("YmdHis").rand(100, 200).'-'.$i->getClientOriginalName().'.'.$i->getClientOriginalExtension();
                $i->move(public_path().'/images/uploads/',$name);
                $input['imageURL'] = $input['imageURL'].'images/uploads/'.$name.',';
            }
        }

        $this->nonmls->create($request->all());

        return response()->json(['status'=>'success']);
//        return new RedirectResponse(route('admin.nonmlsproperties.index'), ['flash_success' => trans('alerts.backend.nonmlsproperties.created')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\NonMls\NonMLSProperty                            $nonmls
     * @param \App\Http\Requests\Backend\NonMls\EditNonMLSRequest $request
     *
     * @return \App\Http\Responses\Backend\NonMLS\EditResponse
     */
    public function edit(NonMLSProperty $nonmls, EditNonMLSRequest $request)
    {
//        $nonmls->area = "test";
        return new EditResponse($nonmls);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Backend\NonMls\UpdateNonMLSRequest $request
     * @param \App\Models\NonMls\NonMLSProperty                              $id
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateNonMLSRequest $request, NonMLSProperty $nonmls)
    {
        $this->nonmls->update($nonmls, $request->all());

        return new RedirectResponse(route('admin.nonmlsproperties.index'), ['flash_success' => trans('alerts.backend.nonmlsproperties.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\NonMls\NonMLS                              $nonmls
     * @param \App\Http\Requests\Backend\NonMls\DeleteNonMLSRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(NonMLSProperty $nonmls, DeleteNonMLSRequest $request)
    {
        $this->nonmls->delete($nonmls);

        return new RedirectResponse(route('admin.nonmlsproperties.index'), ['flash_success' => trans('alerts.backend.nonmlsproperties.deleted')]);
    }
}
