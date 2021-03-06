<?php

namespace App\Http\Controllers;


use App\City;
use App\MLSOpenHouse;
use App\School;
use Illuminate\Http\Request;
use App\MLSProperty;
use Illuminate\Support\Facades\DB;
use TijsVerkoyen\CssToInlineStyles\Css\Property\Property;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){

        return view('index');
    }
    public function newhouse(){
        // $indexInfo = Index::first();
        // $roadMapDatas = RoadMap::all();
        // $team = Pinmoer::where('type','team')->get();
        // $advisor = Pinmoer::where('type','advisor')->get();
        // $partner = Pinmoer::where('type','partner')->get();
        // $client = Pinmoer::where('type', 'client')->get();
        // // dd($indexInfo);
        // $blogs = Blog::take(4)->get();
        // return view('index',compact('indexInfo', 'roadMapDatas', 'team', 'advisor', 'partner', 'client','blogs'));

        $active=1;
        $post_data = json_encode(array('mls_properties' => ['R2307225', 'R2307338', 'R2307818', 'R2307853']));
        $data = json_decode($post_data);
        $select_stat = "select * from m_l_s_properties where ";


        foreach($data->mls_properties as $property) {
            $select_stat .= "mls_number = '" . $property . "' or ";
        }

        if (preg_match('/ or $/', $select_stat))
        {
            $select_stat = substr($select_stat, 0, -4);
        }

        $units = DB::select($select_stat);

        //echo print_r($units);

        return view('newhouse',compact('active', 'units'));
    }
    public function community(){

        return view('community');
    }
    public function cmdetail(){

        return view('community-detail');
    }
    public function school(){

        $cities = School::pluck('city')->toArray();
        $cities = array_unique($cities);

        $school_list = [];
        $id = 0;
        foreach($cities as $c){
            $chi_name = City::where('name',$c)->first()->name_chi;
            $school_list[$c] = [$chi_name,School::where('city',$c)->get(), "city_" . $id++];

        }

//        $schools = $school_list["Burnaby"];

        //dd($school_list);

        return view('school',compact('school_list'));
    }
    public function schouse(){
        return view('school-house');
    }
    public function map(){
        return view('map');
    }
    public function recent(){

//        $open_house = MLSProperty::where('is_openHouse',1)->orderBy('list_date','ASC')->get();
//
//        foreach ($open_house as $oh){
//            $oh->oh_date = MLSOpenHouse::where('mls_number',$oh->mls_number)->first()->startDate;
//        }

        //dd($open_house);

        return view('recent');
    }
    public function presale(){
        return view('presale');
    }
    public function grey(){
        return view('grey');
    }
    public function discount(){
        return view('discount');
    }
    public function inves(){
        return view('investment');
    }
    public function predetail(){
        return view('presale-detail');
    }
    public function greydetail(){
        return view('grey-detail');
    }
//    public function house($id){
//        $active=1;
//        $unit = MLSProperty::where('mls_number','=',$id)->first();
//        $directory = 'public/images/rets';
//        $files = array_merge(glob( $directory . "/" . $unit->mls_number . "-*.png"));
//
//        return view('house',compact('active', 'unit', 'files'));
//    }
    public function news(){
        return view('news');
    }
    public function overview(){
        return view('overview');
    }
    public function selldetail(){
        return view('selldetail');
    }
    public function calculator(){
        return view('calculator');
    }

    public function sendEmail(Request $request){
        $returnVal = 'success';
        $requestContent = $request->all();
        $requestContent = $requestContent['json'];
        $name = $requestContent['name'];
        $phone = $requestContent['phone'];
        $email = $requestContent['email'];
        $addition = $requestContent['addition'];
        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'addition' => $addition
        );
        Mail::send( 'mail.contact_admin', $data, function( $message ) use ($data)
        {
            $message->to('hafeez@evilnut.ca')->from('service@pinmo.ca')->subject( 'Pinmo.ca Contact Form');
        });
        Mail::send( 'mail.contact_admin', $data, function( $message ) use ($data)
        {
            $message->to('service@pinmo.ca')->from('service@pinmo.ca')->subject( 'Pinmo.ca Contact Form');
        });
        Mail::send( 'mail.pinmoToUser', $data, function( $message ) use ($email)
        {
            $message->to($email)->from('service@pinmo.ca')->subject('Thank you for subscribing to Pinmo');
        });
        return $returnVal;
    }

    public function testfilter(Request $request){
//        $requestContent = $request->all();
//        $requestContent = $requestContent['json'];

        $post_data = json_encode(array('mls_properties' => ['R2307225', 'R2307338'], 'coordinate' => [array('lat' => 49.284487, 'lng' => -123.121891), array('lat' => 49.2832802, 'lng' => -123.1253646)], 'title' => ["name1", "name2"]));
        //$type = $requestContent['type'];
        //echo $type;
        echo $post_data;
    }
}
