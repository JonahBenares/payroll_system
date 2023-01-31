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
        Schema::create('employee_deduction_rate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->contrained('employees');
            $table->integer('personal_id');
            $table->foreignId('payslip_info_id')->contrained('payslip_info');
            $table->float('employee_rate',10,2)->nullable();
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
        Schema::dropIfExists('employee_deduction_rate');
    }
};
