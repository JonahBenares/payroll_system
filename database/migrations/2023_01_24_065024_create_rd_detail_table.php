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
        Schema::create('rd_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rd_head_id')->contrained('rd_head');
            $table->foreignId('employee_id')->contrained('employees');
            $table->integer('personal_id');
            $table->date('rd_date')->nullable();
            $table->float('rd_hours',10,2)->nullable();
            $table->float('hourly_rate',10,2)->nullable();
            $table->float('rd_rate',10,2)->nullable();
            $table->float('holiday_rate',10,2)->nullable();
            $table->float('np_rate',10,2)->nullable();
            $table->float('total_rd_amount',10,2)->nullable();
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
        Schema::dropIfExists('rd_detail');
    }
};
