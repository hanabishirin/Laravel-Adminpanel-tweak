<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMLSOpenHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_l_s_open_houses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('m_l_s_property_id')->comment('MLS id in table');
            $table->string('area')->comment('L_Area');
            $table->string('mls_number')->comment('L_DisplayId');
            $table->string('updateDate')->nullable()->comment('L_UpdateDate');
            $table->string('comments')->nullable()->comment('OH_Comments');
            $table->date('startDate')->comment('OH_StartDate');
            $table->string('startTime')->comment('OH_StartTime');
            $table->string('endTime')->comment('OH_EndTime');
            $table->string('openHouseUniqueID')->comment('OH_UniqueID');
            $table->dateTime('updateTime')->nullable()->comment('OH_UdateDateTime');

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
        Schema::dropIfExists('m_l_s_open_houses');
    }
}
