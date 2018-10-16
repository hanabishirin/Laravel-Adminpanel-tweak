<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->date('month_year')->comment('the month of the stat');
            $table->integer('city_id');
            $table->integer('house_sold')->comment('house sold this month');
            $table->integer('apt_sold')->commnet('apartment sold this month');
            $table->integer('avg_price')->comment('the average price for the city this month');
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
        Schema::dropIfExists('transaction_stats');
    }
}
