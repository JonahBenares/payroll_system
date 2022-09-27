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
        Schema::create('payslip_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->integer('personal_id');
            $table->date('paydate');
            $table->date('cutoff_from');
            $table->date('cutoff_to');
            $table->float('basic_salary',10,2);
            $table->float('rest_day',10,2);
            $table->float('holiday_pay',10,2);
            $table->float('overtime_pay',10,2);
            $table->float('night_premium',10,2);
            $table->float('adjustments',10,2);
            $table->float('absences_undertime',10,2);
            $table->float('tardiness',10,2);
            $table->float('gross_pay',10,2);
            $table->float('sss_premium',10,2);
            $table->float('sss_loan',10,2);
            $table->float('withholding_tax',10,2);
            $table->float('philhealth',10,2);
            $table->float('pagibig_fund',10,2);
            $table->float('pagibig_mp2',10,2);
            $table->float('coop_investment',10,2);
            $table->float('coop_loan',10,2);
            $table->float('aub_loan',10,2);
            $table->float('others',10,2);
            $table->float('total_deductions',10,2);
            $table->float('net_pay',10,2);
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
        Schema::dropIfExists('payslip_info');
    }
};
