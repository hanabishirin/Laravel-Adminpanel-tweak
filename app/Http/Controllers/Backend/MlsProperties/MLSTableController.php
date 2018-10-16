<?php

namespace App\Http\Controllers\Backend\MlsProperties;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\MLS\ManageMLSRequest;
use App\Repositories\Backend\MLS\MLSRepository;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class MLSTableController extends Controller
{
    /**
     * @var FaqsRepository
     */
    protected $mls;

    /**
     * @param FaqsRepository $faqs
     */
    public function __construct(MLSRepository $mls)
    {
        $this->mls = $mls;
    }

    /**
     * @param ManageFaqsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageMLSRequest $request)
    {
        return Datatables::of($this->mls->getForDataTable())
//            ->escapeColumns(['question'])
            ->addColumn('id', function ($mls) {
                return $mls->id;
            })
            ->addColumn('address', function ($mls) {
                return $mls->address;
            })
            ->addColumn('area', function ($mls) {
                return $mls->area;
            })
            ->addColumn('asking_price', function ($mls) {
                return $mls->asking_price;
            })
            ->addColumn('is_openHouse', function ($mls) {
                return $mls->is_openHouse;
            })
            ->addColumn('updated_at', function ($mls) {
                return Carbon::parse($mls->updated_at)->toDateString();
            })
            ->addColumn('actions', function ($mls) {
                return $mls->action_buttons;
            })
            ->make(true);
    }
}
