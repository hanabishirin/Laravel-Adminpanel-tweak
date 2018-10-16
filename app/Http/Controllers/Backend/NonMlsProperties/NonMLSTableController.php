<?php

namespace App\Http\Controllers\Backend\NonMlsProperties;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\NonMLS\ManageNonMLSRequest;
use App\Repositories\Backend\NonMLS\NonMLSRepository;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class NonMLSTableController extends Controller
{
    /**
     * @var FaqsRepository
     */
    protected $nonmls;

    /**
     * @param FaqsRepository $faqs
     */
    public function __construct(NonMLSRepository $nonmls)
    {
        $this->nonmls = $nonmls;
    }

    /**
     * @param ManageFaqsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageNonMLSRequest $request)
    {
        return Datatables::of($this->nonmls->getForDataTable())
//            ->escapeColumns(['question'])
            ->addColumn('id', function ($nonmls) {
                return $nonmls->id;
            })
            ->addColumn('address', function ($nonmls) {
                return $nonmls->address;
            })
            ->addColumn('area', function ($nonmls) {
                return $nonmls->area;
            })
            ->addColumn('asking_price', function ($nonmls) {
                return $nonmls->asking_price;
            })
            ->addColumn('is_openHouse', function ($nonmls) {
                return $nonmls->is_openHouse;
            })
            ->addColumn('updated_at', function ($nonmls) {
                return Carbon::parse($nonmls->updated_at)->toDateString();
            })
            ->addColumn('actions', function ($nonmls) {
                return $nonmls->action_buttons;
            })
            ->make(true);
    }
}
