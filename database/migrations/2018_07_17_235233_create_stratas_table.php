<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStratasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stratas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_chi')->nullable();
            $table->integer('city_id');
            $table->integer('community_id');
            $table->string('year_built')->nullable();
            $table->integer('floors')->nullable();
            $table->integer('units')->nullable();
            $table->integer('developer')->nullable();
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
        Schema::dropIfExists('stratas');
    }
}
