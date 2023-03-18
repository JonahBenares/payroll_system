<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adj_calc_detail', function (Blueprint $table) {
            
            $table->float('regular_amount',10,2)->default('0')->after('normal_hours');
            $table->integer('rest_day')->default('0')->after('hourly_rate');
            $table->integer('holiday')->default('0')->after('rd_amount');
            $table->integer('night_premium')->default('0')->after('holiday_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adj_calc_detail', function (Blueprint $table) {
            //
        });
    }
};
