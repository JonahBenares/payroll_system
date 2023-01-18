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
        Schema::create('ot_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->integer('personal_id');
            $table->foreignId('ot_head_id')->contrained('ot_head');
            $table->float('hourly_rate', 10,2)->nullable();
            $table->float('reg_day', 10,2)->nullable();
            $table->float('RD', 10,2)->nullable();
            $table->float('SH', 10,2)->nullable();
            $table->float('SH_RD', 10,2)->nullable();
            $table->float('RH', 10,2)->nullable();
            $table->float('RH_RD', 10,2)->nullable();
            $table->float('reg_day_np', 10,2)->nullable();
            $table->float('reg_np_ot', 10,2)->nullable();
            $table->float('SH_RD_NP', 10,2)->nullable();
            $table->float('SH_OT_NP', 10,2)->nullable();
            $table->float('SH_RD_OT_NP', 10,2)->nullable();
            $table->float('RH_NP', 10,2)->nullable();
            $table->float('RH_RD_NP', 10,2)->nullable();
            $table->float('RH_RD_OT_NP', 10,2)->nullable();
            $table->float('RH_OT_NP', 10,2)->nullable();
            $table->float('total_amount', 10,2)->nullable();
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
		    $table->float('reg_day_hr', 10,2)->nullable();
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
        Schema::dropIfExists('ot_detail');
    }
};
