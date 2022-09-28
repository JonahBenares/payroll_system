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
        Schema::create('payslip_bonus', function (Blueprint $table) {
            $table->id();
            $table->string('bonus_type');
            $table->foreignId('employee_id')->constrained();
            $table->integer('personal_id');
            $table->float('daily_rate');
            $table->float('current_year_computation')->comment('sum of whole years pay then divide by 12');
            $table->integer('leave_left');
            $table->float('performance_percentage')->comment('percentate of how much the employee will get');
            $table->float('total_amount');
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
        Schema::dropIfExists('payslip_bonus');
    }
};
