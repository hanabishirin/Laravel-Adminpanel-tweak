<?php

namespace App\Http\Controllers\Backend\Schools;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Schools\ManageSchoolRequest;
use App\Repositories\Backend\Schools\SchoolsRepository;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class SchoolsTableController extends Controller
{
    /**
     * @var SchoolsRepository
     */
    protected $schools;

    /**
     * @param SchoolsRepository $faqs
     */
    public function __construct(SchoolsRepository $schools)
    {
        $this->schools = $schools;
    }

    /**
     * @param ManageSchoolRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSchoolRequest $request)
    {
        return Datatables::of($this->schools->getForDataTable())
//            ->escapeColumns(['question'])
            ->addColumn('id', function ($schools) {
                return $schools->id;
            })
            ->addColumn('name', function ($schools) {
                return $schools->name;
            })
            ->addColumn('address', function ($schools) {
                return $schools->address;
            })
            ->addColumn('city', function ($schools) {
                return $schools->city;
            })
            ->addColumn('type', function ($schools) {

                if($schools->type == 2){
                    return 'Elementary School';
                }
                elseif($schools->type == 1){
                    return 'High School';
                }
                elseif($schools->type == 0){
                    return 'University';
                }
                else{
                    return 'Middle School';
                }
            })
            ->addColumn('is_public', function ($schools) {

                if($schools->is_public == 1){
                    return 'public';
                }else{
                    return 'private';
                }

            })
            ->addColumn('actions', function ($page) {
                return $page->action_buttons;
            })
            ->addColumn('updated_at', function ($schools) {
                return Carbon::parse($schools->updated_at)->toDateString();
            })
            ->make(true);
    }
}
