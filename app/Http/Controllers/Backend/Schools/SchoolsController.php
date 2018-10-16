<?php

namespace App\Http\Controllers\Backend\Schools;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Schools\CreateSchoolRequest;
use App\Http\Requests\Backend\Schools\DeleteSchoolRequest;
use App\Http\Requests\Backend\Schools\EditSchoolRequest;
use App\Http\Requests\Backend\Schools\ManageSchoolRequest;
use App\Http\Requests\Backend\Schools\StoreSchoolRequest;
use App\Http\Requests\Backend\Schools\UpdateSchoolRequest;
use App\Http\Requests\Request;
use App\Http\Responses\Backend\Schools\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\School\School;
use App\Repositories\Backend\Schools\SchoolsRepository;


class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $schools;

    public function __construct(SchoolsRepository $schools)
    {
        $this->schools = $schools;
    }

    public function index(ManageSchoolRequest $request)
    {
        //
        return new ViewResponse('backend.schools.index');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Http\Requests\Backend\Schools\CreateSchoolRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateSchoolRequest $request)
    {
        return new ViewResponse('backend.schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Backend\Schools\StoreSchoolRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreSchoolRequest $request)
    {
        $school = $request->all();

        if($file = $request->file('school_img_url')){

            $name = time().date("YmdHis").rand(100, 200).'-'.$file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/images/school/',$name);
            $school['school_img_url'] = 'images/school/'.$name;
            $school['school_zone'] = '';
        }

        $this->schools->create($school);

        return new RedirectResponse(route('admin.schools.index'), ['flash_success' => trans('alerts.backend.schools.created')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\School\school                          $schools
     * @param \App\Http\Requests\Backend\Schools\EditSchoolRequest $request
     *
     * @return \App\Http\Responses\Backend\schools\EditResponse
     */
    public function edit(School $schools, EditSchoolRequest $request)
    {
//        $schools->name = 1;
//        $schools->address = 1;
//        $schools->city = 1;
//        $schools->longitude = 1;
//        $schools->latitude = 1;
//        $schools->type = 1;
//        $schools->is_public = 1;
//        $schools->school_zone = 1;
//        $schools->ranking_city = 1;
//        $schools->ranking_state = 1;
//        $schools->ranking_city_5_years = 1;
//        $schools->ranking_state_5_years = 1;
//        $schools->school_img_url = 'images/rets/R2309776-0.png,';
        return new EditResponse($schools);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Backend\Schools\UpdateSchoolRequest $request
     * @param \App\Models\school\school                             $id
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateSchoolRequest $request, School $schools)
    {
        $this->schools->update($schools, $request->all());

        return new RedirectResponse(route('admin.schools.index'), ['flash_success' => trans('alerts.backend.schools.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\School\School                              $schools
     * @param \App\Http\Requests\Backend\Schools\DeleteSchoolRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(School $schools, DeleteSchoolRequest $request)
    {
        $this->schools->delete($schools);

        return new RedirectResponse(route('admin.schools.index'), ['flash_success' => trans('alerts.backend.schools.deleted')]);
    }

    public function editZone(Request $request){

        $input = $request->all();

        $zone = School::find($input->id);
        $zone['school_zone'] = $input['school_zone'];
        $zone->save();

        return new RedirectResponse(route('admin.schools.index'), ['flash_success' => trans('alerts.backend.schools.updated')]);
    }
}
