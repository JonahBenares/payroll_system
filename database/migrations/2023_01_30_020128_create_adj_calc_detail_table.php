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
        Schema::create('adj_calc_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adj_calc_head_id')->constrained('adj_calc_head');
            $table->foreignId('employee_id')->constrained('employees');
            $table->integer('personal_id');
            $table->date('rd_date')->nullable();
            $table->float('rd_hours',10,2)->nullable();
            $table->float('normal_hours',10,2)->nullable();
            $table->float('np_hours',10,2)->nullable();
            $table->float('hourly_rate',10,2)->nullable();
            $table->float('rd_rate',10,2)->nullable();
            $table->float('rd_amount',10,2)->nullable();
            $table->float('holiday_rate',10,2)->nullable();
            $table->float('holiday_amount',10,2)->nullable();
            $table->float('np_rate',10,2)->nullable();
            $table->float('np_amount',10,2)->nullable();
            $table->float('total_amount',10,2)->nullable()->comment('sum of holiday amount, rd amount and np amount');
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
        Schema::dropIfExists('adj_calc_detail');
    }
};
