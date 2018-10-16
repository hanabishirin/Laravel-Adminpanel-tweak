<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use App\Repositories\Frontend\Pages\PagesRepository;

use App\City;
use App\MLSOpenHouse;
use App\MLSProperty;
use App\MLSPropertyRoom;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertySearchController extends Controller
{
    //
    public function dataSearch(Request $request,$query){
        $fields = $request->all();
        $cities = City::all()->keyBy('name');

        //filtering function for all type of filtering action and search
        //base query is determined by the query field eg. mls -> find only mls data
        //all other query filter are done based on whats set in the $fields

        if($query == 'mls'){
            $response = $this->mlsSearch($fields,$cities);
        }

        elseif($query == 'school'){
            $response = $this->schoolSearch($fields,$cities);
        }

        elseif($query == 'openhouse'){
            $response = $this->openHouseSearch($fields,$cities);
        }

        elseif($query == 'community'){

        }

        elseif($query == 'presale'){

        }

        elseif($query == 'grey'){

        }

        elseif($query == 'invest'){

        }
        elseif($query == 'map'){

        }
        elseif($query == 'query'){

        }
        else{
            $response = array(
                'status' => 'error',
                'query' => $query,
                'list' => [],
                'message' => 'query entered was not defined',
            );
        }



        return response()->json($response);
    }

    //single entry from mls
    public function properties($type,$code){

        //if we were to get something from the mls database
        if($type == 'mls'){
            $property = MLSProperty::where('mls_number',$code)->first();
            $room = MLSPropertyRoom::where('listing_id',$property->id)->first();

            $near_list = $this->scopeDistance($property->latitude,$property->longitude,5);

            $directory = 'images/rets';
            $files = array_merge(glob( $directory . "/" . $property->mls_number . "-*.png"));

            $open_house = MLSOpenHouse::where('mls_number',$code)->where('startDate','>=',date('Y-m-d'))->get();
            //dd($open_house);

            return view('mobile-fe.house',compact( 'property', 'files','near_list','open_house'));
        }
    }

    //single entry from school
    public function schools($name){

        $school = School::where('name',$name)->first();
        $school->city_chi = City::where('name',$school->city)->first()->name_chi;
        $near_list = $this->scopeDistance($school->latitude,$school->longitude,5);

        return view('mobile-fe.school-house',compact( 'school','near_list'));;
    }

    // function for searching for schools, return a json response
    // base fields: type, city, sort
    // example of such: BASEURL/search/school?type=all&area=all&sort=all
    // Type: type-1 = High School, type-2 = elementary, type-3 = university
    // Sort: a_first, z_first, high_rate, sell_most
    private function schoolSearch($fields,$cities){
        $list = School::where('id','>',0);

        if(array_key_exists('type',$fields)){
            if($fields['type'] != 'all'){
                $list->where('type',$fields['type']);
            }
        }
        if(array_key_exists('area',$fields)){
            if($fields['area'] != 'all'){
                if($fields['area'] == 'vancouver west' || $fields['area'] == 'vancouver east' || $fields['area'] == 'surrey south'){
                    if($fields['area'] == 'surrey south'){$fields['area'] = 'South Surrey White Rock';}
                    $list->where('area',$fields['area']);
                }else{
                    $list->where('city',$fields['area']);
                }
            }
        }
        if(array_key_exists('sort',$fields)){
            if($fields['sort'] != 'all'){
                if($fields['sort'] != 'a_first'){
                    $list->orderBy('name','DESC');
                }
                if($fields['sort'] != 'z_first'){
                    $list->orderBy('name','ASC');
                }
                if($fields['sort'] != 'high_rate'){
                    $list->orderBy('ranking_state','DESC');
                }
            }
        }
        //need sell most, school zone not available yet

        $list = $list->get();

        $response = array(
            'status' => 'true',
            'query' => 'mls',
            'list' => $list,
        );

        return $response;
    }

    // function for searching for mls, return a json response
    // base fields: type, rm_count, area, filter - newest, price, and page
    // example of such: BASEURL/search/mls?filter=newest&type=all&rm_count=all&area=all&price=all&page=1
    //type: house, apartment, townhouse
    //space: three, six, eight, twelve
    //lot_with_building: true, false - only tell if they are land
    //age:0,20
    //unit_price: 750,3000
    //price:50,350
    private function mlsSearch($fields,$cities){
        $list = MLSProperty::where('property_status_id',1);

        //the type of housing
        if(array_key_exists('type',$fields)){
            if($fields['type'] != 'all'){
                if($fields['type'] == 'house'){
                    $list->whereIn('dwelling',['1/2 Duplex','House with Acreage','House/Single Family']);
                }
                elseif($fields['type'] == 'apartment'){
                    $list->where('dwelling','Apartment/Condo');
                }
                elseif($fields['type'] == 'townhouse'){
                    $list->where('dwelling',['Townhouse','Row House (Non-Strata)']);
                }
            }
        }

        //check for if in a particular city
        if(array_key_exists('area',$fields)){
            if($fields['area'] != 'all'){
                if($fields['area'] == 'vancouver west' || $fields['area'] == 'vancouver east' || $fields['area'] == 'surrey south'){
                    if($fields['area'] == 'surrey south'){$fields['area'] = 'South Surrey White Rock';}
                    $list->where('area',$fields['area']);
                }else{
                    $list->where('city',$fields['area']);
                }
            }
        }

        //the number of rooms
        if(array_key_exists('rm_count',$fields)){
            if($fields['rm_count'] != 'all'){
                if($fields['rm_count'] == 5){
                    $list->where('bed_count','>=',5);
                }
                else{
                    $list->where('bed_count','=',$fields['rm_count']);
                }
            }
        }

        //the size of the lot
        if(array_key_exists('space',$fields)){
            if($fields['space'] != 'all'){
                if($fields['space'] == 'three'){
                    $list->whereBetween('lot_sqft',[3000,6000]);
                }
                elseif($fields['space'] == 'six'){
                    $list->whereBetween('lot_sqft',[6000,9000]);
                }
                elseif($fields['space'] == 'nine'){
                    $list->whereBetween('lot_sqft',[9000,12000]);
                }
                elseif($fields['space'] == 'twelve'){
                    $list->where('lot_sqft','>',12000);
                }
            }
        }

        //asking price of the housing
        if(array_key_exists('price',$fields)){
            $pricing = explode(',',$fields['price']);
            if($fields['price'] != 'all'){
                $list->whereBetween('asking_price',[$pricing[0]*10000,$pricing[1]*10000]);
            }
        }

        //unit_price of the housing
        if(array_key_exists('unit_price',$fields)){
            $pricing = explode(',',$fields['unit_price']);
            if($fields['price'] != 'all'){
                $list->whereBetween('price_sqft',[$pricing[0],$pricing[1]]);
            }
        }

        //age of the housing
        if(array_key_exists('age',$fields)){
            $age = explode(',',$fields['age']);
            if($fields['age'] != 'all'){
                $list->whereBetween('age',[$age[0],$age[1]]);
            }
        }

        // check for if it is Land Only, lot_with_building
        if(array_key_exists('lot_with_building',$fields)){
            if($fields['lot_with_building'] != 'all' || $fields['lot_with_building'] != 'true'){
                $list->where('p_type','Land Only');
            }
        }

        //filtering and ordering option
        if(array_key_exists('filter',$fields)){
            if($fields['filter'] == 'newest'){
                $list->orderBy('list_date','DESC');
            }
            if($fields['filter'] == 'price_l'){
                $list->orderBy('asking_price','ASC');
            }
            if($fields['filter'] == 'price_h'){
                $list->orderBy('asking_price','DESC');
            }
            if($fields['filter'] == 'most_room'){
                $list->orderBy('bed_count','DESC');
            }
            if($fields['filter'] == 'least_room'){
                $list->orderBy('bed_count','ASC');
            }
            if($fields['filter'] == 'largest'){
                $list->orderBy('area_total','DESC');
            }
            if($fields['filter'] == 'smallest'){
                $list->orderBy('area_total','ASC');
            }
        }

        if(array_key_exists('page',$fields)){
            if($fields['page'] != 1){
                $list->skip($fields['page']*200);
            }

            $list->take(200);
            $list = $list->get();
        }

//        dd($fields,$list);
        //construct json to return
        $result = [];


        foreach($list as $l){

            $single = array(
                'mls_no' => $l->mls_number,
                'area' => $l->area,
                'price' => $l->asking_price,
                'price_history'=> $l->price_history,
                'price_sqft'=>$l->price_sqft,
                'address' => $l->address,
                'community'=>$l->community,
                'city' => $l->city,
                'city_chi' => $cities[$l->city]->name_chi,
                'state' => $l->state,
                'postal' => $l->postal,
                'listing_date' => explode(' ',$l->list_date)[0],
                'age' => $l->age,
                'type' =>$l->dewlling,
                'room'=>$l->rm_count,
                'bed'=>$l->bed_count,
                'bath'=>$l->bath_count,
                'size'=>$l->area_total,
                'lot_size'=>$l->lot_sqft,
                'brokerage'=>$l->brokerage,
                'thumb_image'=>$this->imageThumbChecker($l->mls_number,$l->imageURL),
            );
            $result[] = $single;

        }

        $response = array(
            'status' => 'true',
            'query' => 'mls',
            'list' => $result,
        );

        return $response;
    }

    private function openHouseSearch($fields,$cities){

        $list = MLSProperty::where('is_openHouse',1);

        //the type of housing
        if(array_key_exists('type',$fields)){
            if($fields['type'] != 'all'){
                if($fields['type'] == 'house'){
                    $list->whereIn('dwelling',['1/2 Duplex','House with Acreage','House/Single Family']);
                }
                elseif($fields['type'] == 'apartment'){
                    $list->where('dwelling','Apartment/Condo');
                }
                elseif($fields['type'] == 'townhouse'){
                    $list->where('dwelling',['Townhouse','Row House (Non-Strata)']);
                }
            }
        }

        if(array_key_exists('area',$fields)){
            if($fields['area'] != 'all'){
                if($fields['area'] == 'vancouver west' || $fields['area'] == 'vancouver east' || $fields['area'] == 'surrey south'){
                    if($fields['area'] == 'surrey south'){$fields['area'] = 'South Surrey White Rock';}
                    $list->where('area',$fields['area']);
                }else{
                    $list->where('city',$fields['area']);
                }
            }
        }

        //the number of rooms
        if(array_key_exists('rm_count',$fields)){
            if($fields['rm_count'] != 'all'){
                if($fields['rm_count'] == 5){
                    $list->where('bed_count','>=',5);
                }
                else{
                    $list->where('bed_count','=',$fields['rm_count']);
                }
            }
        }

        //the size of the lot
        if(array_key_exists('space',$fields)){
            if($fields['space'] != 'all'){
                if($fields['space'] == 'three'){
                    $list->whereBetween('lot_sqft',[3000,6000]);
                }
                elseif($fields['space'] == 'six'){
                    $list->whereBetween('lot_sqft',[6000,9000]);
                }
                elseif($fields['space'] == 'nine'){
                    $list->whereBetween('lot_sqft',[9000,12000]);
                }
                elseif($fields['space'] == 'twelve'){
                    $list->where('lot_sqft','>',12000);
                }
            }
        }

        //asking price of the housing
        if(array_key_exists('price',$fields)){
            $pricing = explode(',',$fields['price']);
            if($fields['price'] != 'all'){
                $list->whereBetween('asking_price',[$pricing[0]*10000,$pricing[1]*10000]);
            }
        }

        //unit_price of the housing
        if(array_key_exists('unit_price',$fields)){
            $pricing = explode(',',$fields['unit_price']);
            if($fields['price'] != 'all'){
                $list->whereBetween('price_sqft',[$pricing[0],$pricing[1]]);
            }
        }

        //age of the housing
        if(array_key_exists('age',$fields)){
            $age = explode(',',$fields['age']);
            if($fields['age'] != 'all'){
                $list->whereBetween('age',[$age[0],$age[1]]);
            }
        }

        // check for if it is Land Only, lot_with_building
        if(array_key_exists('lot_with_building',$fields)){
            if($fields['lot_with_building'] != 'all' || $fields['lot_with_building'] != 'true'){
                $list->where('p_type','Land Only');
            }
        }

        //filtering and ordering option
        if(array_key_exists('filter',$fields)){
            if($fields['filter'] == 'newest'){
                $list->orderBy('list_date','DESC');
            }
            if($fields['filter'] == 'price_l'){
                $list->orderBy('asking_price','ASC');
            }
            if($fields['filter'] == 'price_h'){
                $list->orderBy('asking_price','DESC');
            }
            if($fields['filter'] == 'most_room'){
                $list->orderBy('bed_count','DESC');
            }
            if($fields['filter'] == 'least_room'){
                $list->orderBy('bed_count','ASC');
            }
            if($fields['filter'] == 'largest'){
                $list->orderBy('area_total','DESC');
            }
            if($fields['filter'] == 'smallest'){
                $list->orderBy('area_total','ASC');
            }
        }

        $list = $list->get();


//        dd($fields,$list);
        //construct json to return
        $result = [];


        foreach($list as $l){

            $single = array(
                'mls_no' => $l->mls_number,
                'area' => $l->area,
                'price' => $l->asking_price,
                'price_history'=> $l->price_history,
                'price_sqft'=>$l->price_sqft,
                'address' => $l->address,
                'community'=>$l->community,
                'city' => $l->city,
                'city_chi' => $cities[$l->city]->name_chi,
                'state' => $l->state,
                'postal' => $l->postal,
                'listing_date' => explode(' ',$l->list_date)[0],
                'oh_date' => MLSOpenHouse::where('mls_number',$l->mls_number)->orderBy('startDate','ASC')->first()->startDate,
                'age' => $l->age,
                'type' =>$l->dewlling,
                'room'=>$l->rm_count,
                'bed'=>$l->bed_count,
                'bath'=>$l->bath_count,
                'size'=>$l->area_total,
                'lot_size'=>$l->lot_sqft,
                'brokerage'=>$l->brokerage,
                'thumb_image'=>$this->imageThumbChecker($l->mls_number,$l->imageURL),
            );

            if($single->oh_date >= date('today')){
                $result[] = $single;
            }
        }

        $response = array(
            'status' => 'true',
            'query' => 'mls',
            'list' => $result,
        );

        return $response;
    }

    //calculating for items within certain radius
    private function scopeDistance($lat, $lng, $radius, $unit = "km")
    {
        $unit = ($unit === "km") ? 6378.10 : 3963.17;
        $lat = (float) $lat;
        $lng = (float) $lng;
        $radius = (double) $radius;

        $near_list = MLSProperty::select(
            DB::raw("*,
            ( ".$unit." * acos( cos( radians(" . $lat . ") ) * cos( radians( latitude ) )* cos( radians( longitude ) - radians(" . $lng . ")) 
            + sin( radians(" . $lat . ") ) *sin( radians( latitude ) ) )) AS distance"))
            ->having("distance", "<", $radius)
            ->orderBy("distance",'DESC')
            ->get();

        foreach($near_list as $nl){
            $nl->city_chi = City::where('name',$nl->city)->first()->name_chi;
        }

        return $near_list;
    }

    //function for checking if the image chain list pulled is valid or not, if not replace with placeholder
    private function imageChecker($imgURL){
        $returnImage = '/public/img/6.jpg';
         if($imgURL != ''){
            $image = rtrim($imgURL, ",");
            $img = explode(',',$image);
            if(file_exists('./public/'.$img[0]) == 1){
                list($width, $height, $type, $attr) = getimagesize('./public/'.$img[0]);
                if($width != null){
                    $returnImage = $imgURL;
                }
            }
         }

         return $returnImage;
    }

    //function for checking if the thumb image pulled is valid or not, if not replace with placeholder

    public function imageThumbChecker($mls_no,$imageURL){
        $returnImage = 'img/6.jpg';

        if($imageURL != ''){
            if(exif_imagetype('./images/rets_thumb/'.$mls_no.'-thumb.png')) {
                $returnImage = 'images/rets_thumb/'.$mls_no.'-thumb.png';
            }
        }

        return $returnImage;
    }

}
