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
        Schema::create('payslip_salary_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payslip_salary_head_id')->contrained('payslip_salary_head');
            $table->foreignId('employee_id')->contrained('employees');
            $table->foreignId('payslip_info_id')->contrained('payslip_info');
            $table->float('total_amount',10,2)->nullable()->default(0);
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
        Schema::dropIfExists('payslip_salaray_detail');
    }
};
