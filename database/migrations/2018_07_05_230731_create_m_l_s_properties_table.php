<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMLSPropertiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_l_s_properties', function (Blueprint $table) {
            // base information
            $table->increments('id');
            $table->string('listing_id')->comment('L_ListingID, mls main id used for listings');
            $table->string('mls_number')->comment('L_DisplayId, MLS#');
            $table->string('area')->comment('L_Area, the local area');
            $table->integer('asking_price')->comment('L_AskingPrice, the listing price of the property');
            $table->longText('price_history')->nullable()->comment('L_AskingPrice, the listing price of the property');
            $table->string('unit_number')->nullable()->comment('L_AddressUnit');
            $table->string('address')->comment('L_Address, address');
            $table->string('city')->comment('L_City');
            $table->string('state')->comment('L_State');
            $table->string('postal')->comment('L_Zip, postal code');
            $table->dateTime('list_date')->comment('L_ListingDate, the date this listing comes out on');
            $table->dateTime('update_date')->comment('L_UpdateDate, the date this listing have been updated');
            $table->integer('image_count')->default(0)->comment('L_PictureCount, # of image for this listing');
            $table->dateTime('image_update_time')->comment('L_Last_Photo_updt, last time photo have been updated');
            $table->string('address_num_low')->nullable()->comment('L_AddressNumberLow');
            $table->float('latitude',10,6)->default(0)->comment('LMD_MP_Latitude, latitude');
            $table->float('longitude',10,6)->default(0)->comment('LMD_MP_Longitude, longitude');
            $table->string('price_sqft')->default(0)->comment('L_PricePerSQFT');
            $table->string('p_type')->comment('LM_char1_36, property type');
            $table->string('brokerage')->comment('LO1_OrganizationName, the brokerage');
            $table->string('school_listing')->comment('list of schools in id');
            $table->longText('imageURL')->nullable()->comment('array of local url for saving all the images');
            $table->integer('property_status_id')->default(1)->comment('0-not found from MLS database, current entry removed, 1-active, other status client can set from backend');
            $table->integer('is_openHouse')->default(0);
            $table->integer('OH_StartDateTime')->nullable();
            $table->integer('OH_EndDateTime')->nullable();

            //housing description
            $table->longText('description')->nullable()->comment('LR_remarks22, public description agent put into database regarding this particular housing');
            $table->longText('Chinese_description')->nullable()->comment('LR_remarks22, public description agent put into database regarding this particular housing');
            $table->string('community')->nullable()->comment('LM_Char10_5, community');
            $table->string('dwelling')->nullable()->comment('LM_Char10_11, type of dwelling');
            $table->string('title_to_land')->nullable()->comment('LM_Char10_12, title to land');
            $table->string('zoning')->nullable()->comment('LM_Char10_17, zoning');
            $table->string('foundation')->nullable()->comment('LM_Char10_18, foundation');
            $table->integer('built_year')->nullable()->comment('LM_Int2_2, year built');
            $table->integer('age')->nullable()->comment('LM_Int2_3, house age');
            $table->string('view')->nullable()->comment('LM_char100_3, view of the building');
            $table->string('v_tour')->nullable()->comment('VT_VTourURL, virtual tour');
            $table->string('style')->nullable()->comment('LFD_StyleofHome_1, style of home');
            $table->string('service')->nullable()->comment('LFD_ServicesConnected_7, service connected to property');
            $table->string('water')->nullable()->comment('LFD_WaterSupply_8, water supply');
            $table->string('construction')->nullable()->comment('LFD_Construction_10, construction material');
            $table->string('exterior')->nullable()->comment('LFD_ExteriorFinish_11, exterior finished work');
            $table->string('roof')->nullable()->comment('LFD_Roof_12, roof material');
            $table->string('parking_type')->nullable()->comment('LFD_Parking_13, type of parking');
            $table->string('parking_loc')->nullable()->comment('LFD_ParkingAccess_14, parking location');
            $table->string('site_inf')->nullable()->comment('LFD_SiteInfluences_15, site influence');
            $table->string('outdoor')->nullable()->comment('LFD_OutdoorArea_16, have out door area');
            $table->string('heating')->nullable()->comment('LFD_FuelHeating_17, heating type');
            $table->string('fireplace_fuel')->nullable()->comment('LFD_FireplaceFueledby_18, fire place fuel type');
            $table->string('floor_finish')->nullable()->comment('LFD_FloorFinish_19, floor finishing');
            $table->string('features')->nullable()->comment('LFD_FeaturesIncluded_24, included features');
            $table->string('amenities')->nullable()->comment('LFD_Amenities_25');
            $table->string('include_maint_fee')->nullable()->comment('LFD_MaintFeeIncludes_26');
            $table->string('bylaw_rest')->nullable()->comment('LFD_ByLawRestrictions_27');
            $table->string('facing')->nullable()->comment('LFD_DirectionalExpFaces_28');


            //housing build details
            $table->integer('stories')->default(1)->nullable()->comment('LM_Int1_1, # of Stories');
            $table->integer('fireplace')->default(0)->nullable()->comment('LM_Int1_2, # of fireplaces');
            $table->integer('bed_count')->default(0)->nullable()->comment('LM_Int1_4, total # of bedroom');
            $table->integer('bed_bsmt')->default(0)->nullable()->comment('LM_Int1_5, # of bedroom in basement');
            $table->integer('rm_count')->default(0)->nullable()->comment('LM_Int1_7, total room count');
            $table->integer('kitchen_count')->default(0)->nullable()->comment('LM_Int1_8, # of kitchen');
            $table->integer('halfbath_count')->default(0)->nullable()->comment('LM_Int1_17, # of half bathroom');
            $table->integer('fullbath_count')->default(0)->nullable()->comment('LM_Int1_18, # of full bathroom');
            $table->integer('bath_count')->default(0)->nullable()->comment('LM_Int1_19, # of bathrooms in total');
            $table->integer('cov_park_count')->default(0)->nullable()->comment('LM_Int2_6, # of covered parking space');
            $table->integer('parking_count')->default(0)->nullable()->comment('LM_Int2_7, # of total parking space');
            $table->double('area_main')->default(0)->nullable()->comment('LM_Dec_1, floor area for the main floor');
            $table->double('area_above')->default(0)->nullable()->comment('LM_Dec_2, floor area for the above floor');
            $table->double('area_below')->default(0)->nullable()->comment('LM_Dec_3, floor area for the below floor');
            $table->double('area_bsmt')->default(0)->nullable()->comment('LM_Dec_4, floor area for the basement floor');
            $table->double('area_total')->default(0)->nullable()->comment('LM_Dec_5, floor area for the total floors');
            $table->double('area_unfinish')->default(0)->nullable()->comment('LM_Dec_6, floor area for the unfinished floors');
            $table->double('area_GT')->default(0)->nullable()->comment('LM_Dec_7, floor area for the grand floors');
            $table->string('lot_front_ft')->default(0)->comment('LM_Dec_8, lot size width in feet');
            $table->string('lot_front_mtr')->default(0)->comment('LM_Dec_9, lot size width in meters');
            $table->string('lot_depth_ft')->default(0)->comment('LM_char30_28, lot size depth in feet');
            $table->string('parcel_num')->comment('LM_char100_1, Parcel Number, no idea what this is');
            $table->string('lot_sqft')->default(0)->comment('LM_Dec_11, lot size in square feet');
            $table->string('lot_acre')->default(0)->comment('LM_Dec_12, lot size in acres');
            $table->string('lot_sqmt')->default(0)->comment('LM_Dec_13, lot size in square meters');
            $table->string('lot_hect')->default(0)->comment('LM_Dec_14, lot size in hectares');
            $table->double('g_tax')->default(0)->comment('LM_Dec_16, gross tax');
            $table->string('strata_fee')->default(0)->nullable()->comment('LM_Dec_22, Strata Maintenance Fee');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_l_s_properties');
    }
}
