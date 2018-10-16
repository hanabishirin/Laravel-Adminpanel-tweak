<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenHouseNonMLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_house_non_m_l_s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('non_m_l_s_property_id');
            $table->date('openhouse_time');
            $table->time('openhouse_start_time');
            $table->time('openhouse_end_time');
            $table->longText('openhouse_remark')->nullable();
            $table->string('layout_diagram_urls')->nullable();
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
        Schema::dropIfExists('open_house_non_m_l_s');
    }
}
