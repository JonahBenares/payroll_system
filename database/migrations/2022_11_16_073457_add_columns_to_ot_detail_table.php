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
        Schema::table('ot_detail', function (Blueprint $table) {
            $table->float('RD_HR', 10,2)->nullable();
            $table->float('SH_HR', 10,2)->nullable();
            $table->float('SH_RD_HR', 10,2)->nullable();
            $table->float('RH_HR', 10,2)->nullable();
            $table->float('RH_RD_HR', 10,2)->nullable();
            $table->float('reg_day_np_hr', 10,2)->nullable();
            $table->float('reg_np_ot_hr', 10,2)->nullable();
            $table->float('SH_RD_NP_HR', 10,2)->nullable();
            $table->float('SH_OT_NP_HR', 10,2)->nullable();
            $table->float('SH_RD_OT_NP_HR', 10,2)->nullable();
            $table->float('RH_NP_HR', 10,2)->nullable();
            $table->float('RH_RD_NP_HR', 10,2)->nullable();
            $table->float('RH_RD_OT_NP_HR', 10,2)->nullable();
            $table->float('RH_OT_NP_HR', 10,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ot_detail', function (Blueprint $table) {
            //
        });
    }
};
